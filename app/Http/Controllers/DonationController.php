<?php

namespace App\Http\Controllers;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function store(Request $request){
        
        $request->validate([
            'project' => 'required', 
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',   
            'medicine' => 'required', 
            'address' => 'required', 
            'date_time' => 'required', 
            'comments' => 'required', 
        ]);
  
        $input = $request->all();

        Donation::create($input);
     
        return redirect()->route('donation')
                        ->with('success','Our Biker will pick medicine');
    }
}
