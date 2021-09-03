<?php

namespace App\Actions;

use App\Mail\NewLogin;
use App\Models\User;
use App\Notifications\NewLoginNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class LoginUserAction
{

    public function authenticate(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'error' => 'Unauthorized, invalid email and password combination',
            ], 401);
        }
        // Send a security login notification to account owner
        Mail::to($user)->send(new NewLogin($request));

        $token = Auth::attempt($request->only('email', 'password'));

        return $this->respondWithToken($token);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'expires_in' => Auth::factory()->getTTL() * 60,
        ]);
    }
}
