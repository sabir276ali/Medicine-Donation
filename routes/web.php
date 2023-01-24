<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\DonationCenterController;
use App\Http\Controllers\DonationProjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RiderController;
use App\Models\Donation;
use App\Models\Rider;
use App\Models\Profile;
use App\Models\DonationRequest;
use App\Models\DonationHub;
use App\Models\DonationDelivered;
use App\Models\DonationCenter;
use App\Models\DonationProject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/centers',DonationCenterController::class);
Route::resource('/project',DonationProjectController::class);
Route::resource('/users',UserController::class);

Route::get('/', function () {
    return view('index');
});

Route::get('/cause',function(){
    return view('causes');
});
Route::get('/events',function(){
    return view('events');
});
Route::get('/gallery',function(){
    return view('gallery');
});
Route::get('/contact',function(){
    return view('contact');
})->name('contact');

Route::get('/donate',function(){
    return view('donate');
})->name('donation');

Route::post('/contact',[ContactController::class,'store'])->name('contact.store');

Route::post('/donation',[DonationController::class,'store'])->name('donation.store');

Route::resource('/rider',RiderController::class);



Route::get('/admin',function(){
    $donation=Donation::where('reply',false)->orderBy('created_at','desc');
    return view('Admin.index',compact('donation'));
})->name('admin');


Route::get('/admin/request',function(){
   
    $donation=Donation::where('reply',false)->get();
    $rider=Rider::all();
    return view('Admin.Donations.request',compact('donation','rider'));

})->name('donations.request');

Route::get('/admin/recieved',function(){
   
    $donation=Donation::where('reply',true)->where('recieved',false)->orderBy('date_time','desc')->get();
    $center=DonationCenter::all();
    return view('Admin.Donations.recieved',compact('donation','center'));

})->name('donations.recieved');

Route::get('/admin/destination',function(){
   
    $donation=Donation::where('recieved',true)->where('destination',false)->get();
    $project=DonationProject::all();
    return view('Admin.Donations.destination',compact('donation','project'));

})->name('donations.destination');



Route::post('/admin/donations/reply',function(Request $request){
  
    $request->validate([
        'email' => 'required',
        'r_id' => 'required',  
        'd_id' => 'required',
    ]);

    $input = $request->all();

    DonationRequest::create($input);

     $rider_image=$rider=Rider::where('id',$request->r_id)->pluck('image');
     $rider_name=$rider=Rider::where('id',$request->r_id)->pluck('name');
     $rider_email=$rider=Rider::where('id',$request->r_id)->pluck('email');
     $rider_phone=$rider=Rider::where('id',$request->r_id)->pluck('phone');
     $rider_vehicle=$rider=Rider::where('id',$request->r_id)->pluck('vehicle');
     $rider_vehicle_no=$rider=Rider::where('id',$request->r_id)->pluck('vehicle_no');
     

    Donation::where('id', $request->d_id)->update(['reply' => true]);

    $details = [
        'title' => 'Mail from Donate to Make Changes',
        'image' =>   $rider_image[0],
        'name' =>   $rider_name[0],
        'email' =>  $rider_email[0],
        'phone' =>  $rider_phone[0],
        'vehicle' => $rider_vehicle[0],
        'vehicle_no' => $rider_vehicle_no[0],
        'body' => 'Thank You for Donation request Our Rider will soon approach you'
    ];
    
    \Mail::to($request->email)->send(new \App\Mail\DonationReply($details));


     return redirect()->route('donations.request')
                    ->with('success','Message Sent Successfuly.');


})->name('donations.reply');



Route::post('/admin/donations/hub',function(Request $request){
  
    $request->validate([
        'email' => 'required',
        'c_id' => 'required',  
        'd_id' => 'required',
    ]);

    $input = $request->all();

    DonationHub::create($input);

     $center_image=$rider=DonationCenter::where('id',$request->c_id)->pluck('image');
     $center_name=$rider=DonationCenter::where('id',$request->c_id)->pluck('Branch');
     $center_city=$rider=DonationCenter::where('id',$request->c_id)->pluck('city');
     $center_address=$rider=DonationCenter::where('id',$request->c_id)->pluck('address');
    
     
    Donation::where('id', $request->d_id)->update(['recieved' => true]);

    $details = [
        'title' => 'Mail from Donate to Make Changes',
        'image' =>   $center_image[0],
        'name' =>   $center_name[0],
        'city' =>  $center_city[0],
        'address' =>  $center_address[0],
        'body' => 'Your Donation is Recieved at our Branch'
    ];
    
    \Mail::to($request->email)->send(new \App\Mail\DonationRecieved($details));


     return redirect()->route('donations.recieved')
                    ->with('success','Message Sent Successfuly.');


})->name('donations.hub');



Route::post('/admin/donations/delivered',function(Request $request){
  
    $request->validate([
        'email' => 'required',
        'p_id' => 'required',  
        'd_id' => 'required',
    ]);

    $input = $request->all();

    DonationDelivered::create($input);
    $project_image=$rider=DonationProject::where('id',$request->p_id)->pluck('image');
    $project_name=$rider=DonationProject::where('id',$request->p_id)->pluck('project');
    $project_city=$rider=DonationProject::where('id',$request->p_id)->pluck('city');
    $project_address=$rider=DonationProject::where('id',$request->p_id)->pluck('address');
   
    
   Donation::where('id', $request->d_id)->update(['destination' => true]);

    $details = [
        'title' => 'Mail from Donate to Make Changes',
        'image' =>   $project_image[0],
        'name' =>   $project_name[0],
        'city' =>  $project_city[0],
        'address' =>  $project_address[0],
        'body' => 'Your Donation is Delivered to following area'
    ];
   
    
    \Mail::to($request->email)->send(new \App\Mail\DonationDelivered($details));


     return redirect()->route('donations.destination')
                    ->with('success','Message Sent Successfuly.');


})->name('donations.delivered');







Auth::routes();

Route::get('/profile',function(){
$email = Auth::user()->email;
$profile=Profile::where('u_id',Auth::user()->id)->get();
$donation=Donation::where('email',$email)->get();
return view('profile',compact('donation','profile'));
})->name('profile');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth', 'verified']);

// mail route

// Route::get('/send-mail', function () {
   
//     $details = [
//         'title' => 'Mail from Donate to Make Changes',
//         'body' => 'Thank You for Donation request we will soon approach you'
//     ];
   
//     \Mail::to('muhammadsabirali4@gmail.com')->send(new \App\Mail\DonationReply($details));
   
//     dd("Email is Sent.");
// });

Route::post('/profile',function(Request $request){
    $request->validate([
        'u_id' => 'required',
        'phone' => 'required',
        'address' => 'required',  
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $input = $request->all();

    if ($image = $request->file('image')) {
        $destinationPath = 'user/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $input['image'] = "$profileImage";
    }
    
    Profile::create($input);
 
    return redirect()->route('profile')
                    ->with('success','Information Saved Successfully.');
})->name('profile.store');

// email || Verify || Reset

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

 
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');




