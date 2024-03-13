<?php

namespace App\Http\Controllers;

use App\Mail\CustomerSupportMail;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Support\Facades\Mail;

class CustomerSupportController extends Controller
{
    public function index()
    {
        return view('ContactUs');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $mail = new CustomerSupportMail($request->input('name'), $request->input('email'), $request->input('message'));
        $mail->from(new Address('notify@demomailtrap.com', 'no-reply'));
        Mail::to("mdkam02ali@gmail.com")->send($mail);

        return view('ContactUs', ['message' => 'Thanks for your message. We\'ll be in touch.']);
    }
}
