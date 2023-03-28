<?php
namespace App\Helpers;
use App\Models\User;
use Illuminate\Http\Request;

class UserDatabaseHelper {
    public static function add(Request $request) {
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'role' => $request->input('role', 'user')
        ]);
    }

    public static function delete($id) {
        $user = User::find($id);
        $user->delete();
    }
}
