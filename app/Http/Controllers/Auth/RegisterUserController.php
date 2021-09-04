<?php

namespace App\Http\Controllers\Auth;

use App\Actions\RegisterUserAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterUserRequest;

class RegisterUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('auth.register');
    }

    public function store(RegisterUserRequest $request, RegisterUserAction $registerUserAction)
    {

        $registerUserAction->execute($request);

        return response()->json([
            'message' => 'Please check email for verification link'
        ], 201);
    }
}
