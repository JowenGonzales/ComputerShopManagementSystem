<?php
namespace App\Helpers;
use App\Models\Computer;
use App\Models\User;
use Illuminate\Http\Request;

class ComputerDatabaseHelper {
    public static function add(Request $request) {
        Computer::create([
            'name' => $request->input('name'),

        ]);
    }

    public static function delete($id) {
        $computer = Computer::find($id);
        $computer->delete();
    }
    public static function update(Request $request, $id) {

    }
}
