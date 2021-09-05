<?php

namespace App\Actions;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginUserAction
{

    public function authenticate(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        abort_if(
            !$user || !Hash::check($request->password, $user->password),
            401,
            'Invalid email address or password'
        );

        Auth::attempt($request->only('email', 'password'));
    }
}
