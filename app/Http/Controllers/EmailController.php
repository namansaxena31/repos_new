<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class EmailController extends Controller
{
    public function sendWelcomeEmail()
    {
        
        // Send the welcome email
        Mail::to("nahmansaxena@gmail.com")->send(new WelcomeEmail());

        // Check if the email was sent successfully
        // if (Mail::failures()) {
        //     // Handle failure
        //     return response()->json(['message' => 'Failed to send email'], 500);
        // }

        // Email sent successfully
        return response()->json(['message' => 'Email sent successfully'], 200);
    }
}
