<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\NotificationHelper;
use App\Helpers\UserDatabaseHelper;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    //
    public function useradd() {
        $admin = auth()->guard('admin')->user();

        return view('admin.users.adduser', [
            'user' => $admin,
        ]);
    }

    public function useredit() {
        $admin = auth()->guard('admin')->user();
        $customers = User::where('role' , 'user')->get();
        return view('admin.users.edituser.edituser', [
            'user' => $admin,
            'customers' => $customers
        ]);
    }

    public function userview(User $user) {

        $adminlogged = auth()->guard('admin')->user();
        return view('admin.users.edituser.viewuser', [
            'user' => $adminlogged,
            'customer' => $user
        ]);
    }

    public function userdelete() {
        $admin = auth()->guard('admin')->user();
        $customers = User::where('role', 'user')->get();
        return view('admin.users.deleteuser', [
            'user' => $admin,
            'customers' => $customers
        ]);
    }

    public function timemanagement() {
        $admin = auth()->guard('admin')->user();

        $customers = User::where('role', 'user')->get();
        return view('admin.users.timemanagement.timemanagement', [
            'user' => $admin,
            'customers' => $customers
        ]);
    }

    public function timemanagementview(User $user) {

        $adminlogged = auth()->guard('admin')->user();
        return view('admin.users.timemanagement.view', [
            'user' => $adminlogged,
            'customer' => $user
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

    public function deleteuser(Request $request) {
        UserDatabaseHelper::delete($request->userid);
        return back();
    }
    public function updateuser(Request $request, User $user) {
        $customerID = $user->id;
        UserDatabaseHelper::update($request, $customerID);
        return back();
    }


    // Manage User Roles

    public function manageuserroles() {
        $admin = auth()->guard('admin')->user();
        $customers = User::where('role' , 'user')->get();

        return view('admin.users.manageuserroles.manageuserroles', [
           'user' => $admin,
            'customers' => $customers
        ]);
    }

    public function usersbillinginformation() {
        $admin = auth()->guard('admin')->user();
        $customers = User::where('role' , 'user')->get();

        return view('admin.users.manageuserroles', [
            'user' => $admin,
            'customers' => $customers
        ]);
    }
}
