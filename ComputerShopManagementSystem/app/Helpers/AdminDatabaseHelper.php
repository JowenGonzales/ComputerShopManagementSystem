<?php
namespace App\Helpers;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminDatabaseHelper {
    public static function createAdmin() {
        Admin::create([
            'name' => "Jowen Gonzales",
            'email' => "test@test.com",
            'password' => bcrypt('testtest')
        ]);
    }
}
