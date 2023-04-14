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
    public static function adjust_time($user, $amount, $operation) {
        if (strtolower($operation) == 'add') {
            self::add_time($user, $amount);
        }
        if (strtolower($operation)  == 'subtract') {
            self::subtract_time($user, $amount);
        }

    }
    public static function add_time($user, $amount) {
        $user->time_available = $amount;
        $user->save();
    }
    public static function subtract_time($user, $amount) {
        $user->time_available = $amount;
        $user->save();
    }
}
