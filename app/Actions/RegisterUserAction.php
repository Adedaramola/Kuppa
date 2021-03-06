<?php

namespace App\Actions;

use App\Models\User;
use App\Notifications\WelcomeUserNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterUserAction
{

    public function execute(Request $request): void
    {
        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->notify(new WelcomeUserNotification($user));

        if (!Auth::attempt($request->only('email', 'password'))) {
            abort(500);
        }
    }
}
