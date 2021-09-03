<?php

namespace App\Http\Controllers\Auth;

use App\Actions\LoginUserAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginUserRequest;

class LoginUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function login(LoginUserRequest $request, LoginUserAction $loginUserAction)
    {
        $response = $loginUserAction->authenticate($request);

        return $response;
    }
}
