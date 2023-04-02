<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //
    public static function logout() {
        Auth::logout();
        Session::flush();
        Session::put('success', 'You are logout sucessfully');
        return redirect(route('simulation'));
    }
}
