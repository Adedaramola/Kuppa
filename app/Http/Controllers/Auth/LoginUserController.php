<?php

namespace App\Http\Controllers\Auth;

use App\Actions\LoginUserAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginUserRequest;

class LoginUserController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(LoginUserRequest $request, LoginUserAction $loginUserAction)
    {
        $loginUserAction->authenticate($request);

        return redirect('/');
    }
}
