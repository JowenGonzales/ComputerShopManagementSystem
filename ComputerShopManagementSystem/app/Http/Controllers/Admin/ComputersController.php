<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ComputerDatabaseHelper;
use App\Http\Controllers\Controller;
use App\Models\Computer;
use App\Models\User;
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
    public function addcomputer(Request $request) {
        $request->validate([
           'name' => ['string', 'required']
        ]);
        ComputerDatabaseHelper::add($request);
        return back();
    }


    public function computerView() {
        $admin = auth()->guard('admin')->user();
        $computers = Computer::all();
        return view('admin.computers.editcomputer.viewcomputers', [
            'user' => $admin,
            'computers' => $computers
        ]);
    }

    public function computerEdit(Computer $computer) {
        $admin = auth()->guard('admin')->user();
        return view('admin.computers.editcomputer.editcomputer', [
           'user' => $admin,
            'computer' => $computer
        ]);
    }

    public function updatecomputer(Request $request, Computer $computer) {
        ComputerDatabaseHelper::update($request, $computer->id);
        return back();
    }
}
