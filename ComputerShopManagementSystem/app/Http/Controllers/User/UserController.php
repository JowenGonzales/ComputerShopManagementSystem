<?php

namespace App\Http\Controllers\User;

use App\Helpers\UserDatabaseHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //
    public function dashboard() {
        $user = Auth::user();
        return view('user.dashboard', [

            'user' => $user
        ]);
    }
    public static function logout(Request $request) {
        UserDatabaseHelper::update_time($request->remainingtime, $request->userid);
        Auth::logout();
        Session::flush();
        Session::put('success', 'You are logout sucessfully');
        return redirect(route('simulation'));
    }
}
