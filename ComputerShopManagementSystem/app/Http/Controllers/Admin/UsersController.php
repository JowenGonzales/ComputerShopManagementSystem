<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
}
