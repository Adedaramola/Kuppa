<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutUserController extends Controller
{

    public function __invoke(Request $request)
    {
        $this->middleware('auth');

        Auth::logout();
        $request->session()->invalidate();

        return redirect('/');
    }
}
