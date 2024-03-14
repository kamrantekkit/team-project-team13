<?php

namespace App\Http\Controllers;

use App\Mail\CustomerSupportMail;
use App\Models\User;
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

        $users = User::where('is_admin', 1)->pluck('email')->toArray();

        Mail::to($users)->send($mail);

        return view('ContactUs', ['message' => 'Thanks for your message. We\'ll be in touch.']);
    }
}
