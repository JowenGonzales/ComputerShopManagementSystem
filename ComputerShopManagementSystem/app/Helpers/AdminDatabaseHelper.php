<?php
namespace App\Helpers;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminDatabaseHelper {
    public static function createAdmin() {
        $admin = new Admin();
        $admin->email = 'admin';
        $admin->password = Hash::make('admin');
        $admin->name = 'Jowen Gonzales';
        $admin->save();
    }
}
