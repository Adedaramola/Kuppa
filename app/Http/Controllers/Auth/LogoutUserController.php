<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutUserController extends Controller
{

    public function __invoke(): JsonResponse
    {
        Auth::logout();

        return response()->json([
            'message' => 'Logged out successfully'
        ]);
    }
}
