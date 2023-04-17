<?php

namespace App\Http\Controllers\User;

use App\Helpers\ComputerDatabaseHelper;
use App\Helpers\UserDatabaseHelper;
use App\Http\Controllers\Controller;
use App\Models\Computer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //
    public function dashboard(Request $request) {
        $user = Auth::user();
        return view('user.dashboard', [
            'user' => $user,
        ]);
    }
    public static function logout(Request $request) {

        // Updates the time depends on the user
        UserDatabaseHelper::update_time($request->remainingtime, $request->userid);

        // Get the current computer and then make it offline
        $computer = Computer::find($request->input('computerid'));
        ComputerDatabaseHelper::makeoffline($computer);


        Auth::logout();
        Session::flush();
        Session::put('success', 'You are logout sucessfully');
        return redirect(route('simulation'));
    }

    public static function emptyavailabletime(User $user) {
        UserDatabaseHelper::update_time(0, $user->id);
        Auth::logout();
        Session::flush();
        Session::put('success', 'You are logout sucessfully');
        return redirect(route('simulation'));
    }
}
