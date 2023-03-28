<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\UserDatabaseHelper;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    //
    public function useradd() {
        $user = Auth::user();
        return view('admin.users.adduser', [
            'user' => $user
        ]);
    }

    public function useredit() {
        $user = Auth::user();
        $customers = User::where('role' , 'user')->get();
        return view('admin.users.edituser', [
            'user' => $user,
            'customers' => $customers
        ]);
    }

    public function userdelete() {
        $user = Auth::user();
        $customers = User::where('role', 'user')->get();
        return view('admin.users.deleteuser', [
            'user' => $user,
            'customers' => $customers
        ]);
    }
    //


    public function adduser(Request $request) {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'string']
        ]);
        UserDatabaseHelper::add($request);
        return back();
    }
}
