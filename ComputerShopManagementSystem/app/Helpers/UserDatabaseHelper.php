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
    public static function update(Request $request, $id) {
        $customer = User::find($id);
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->save();
    }
    public static function update_time($time, $id) {
        $user = User::find($id);
        $user->time_available = $time;
        $user->save();
    }
}
