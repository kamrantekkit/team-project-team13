<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function emailUpdate(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        ]);

        auth()->user()->update([
            'email' => $validated['email']
        ]);

        return redirect()->route('dashboard.settings')->with("emailStatus", "Email changed successfully!");
    }

    public function nameUpdate(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        auth()->user()->update([
            'name' => $validated['name']
        ]);

        return redirect()->route('dashboard.settings')->with("nameStatus", "Name changed successfully!");
    }

    public function passwordUpdate(Request $request) {
        $validated = $request->validate([
            'old_password' => ['required','string'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);



        if (!Hash::check($validated['old_password'],auth()->user()->password)) {
            throw ValidationException::withMessages([
                'old_password' => __('auth.failed'),
            ]);
        }

        auth()->user()->update([
            'password' => Hash::make($validated['password']),
        ]);



        return redirect()->route('dashboard.settings')->with("passwordStatus", "Password changed successfully!");
    }
}
