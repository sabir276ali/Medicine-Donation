<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {   
      
    }

    public function create()
    {   
      
    }

    public function update()
    {   
      
    }

    public function edit()
    {   
      
    }

    public function store(Request $request){
      
        $request->validate([
            'f_name' => 'required', 
            'l_name' => 'required',
            'email' => 'required',
            'phone' => 'required',  
            'message' => 'required', 
        ]);
  
        $input = $request->all();

        Contact::create($input);
     
        return redirect()->route('contact')
                        ->with('success','Thanks for Contactting us.');
    }
}
