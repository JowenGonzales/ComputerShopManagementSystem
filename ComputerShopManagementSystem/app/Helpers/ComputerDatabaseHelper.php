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
        $computer = Computer::find($id);
        $computer->name = $request->input('name');
        $computer->price_per_hour = $request->input('price_per_hour');
        $computer->total_price = $request->input('total_price');
        $computer->operating_system = $request->input('operating_system');
        $computer->processor = $request->input('processor');
        $computer->ram = $request->input('ram');
        $computer->graphics_card = $request->input('graphics_card');
        $computer->storage = $request->input('storage');
        $computer->location = $request->input('location');
        $computer->notes = $request->input('notes');
        $computer->save();
    }
}
