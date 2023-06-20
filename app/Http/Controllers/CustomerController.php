<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function view(){
        return view('form');
    }

    public function store(Request $request){

        $request->validate([
            'g-recaptcha-response' => 'captcha',
        ]);

        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->dob = $request['dob'];
        $customer->save();

        return redirect('/');
    }

//     public function submitForm(Request $request)
// {
//     $request->validate([
//         // Other validation rules
        
//         'g-recaptcha-response' => 'required|captcha',
//     ]);
    
//     // Process the form submission
    
//     return redirect()->back()->with('success', 'Form submitted successfully.');
// }
}