<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComputersController extends Controller
{
    //
    public function add() {
        $admin= auth()->guard('admin')->user();
        return view('admin.computers.add', [
            'user' => $admin
        ]);
    }
}
