<?php
namespace App\Helpers;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class NotificationHelper {
    public static function success() {
        return json_encode([
            'text' => "Succesfull",
            'icon' => 'success',
            'timer' => 3000,
            'showConfirmButton' => false
        ]);
    }
}
