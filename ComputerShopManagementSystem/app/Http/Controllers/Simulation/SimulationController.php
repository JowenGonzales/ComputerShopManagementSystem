<?php

namespace App\Http\Controllers\Simulation;

use App\Http\Controllers\Controller;
use App\Models\Computer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SimulationController extends Controller
{
    //
    public function index() {
        return view('simulation.index');
    }
    public function all() {
        $computers = Computer::all();
        return view('simulation.computers.all', [
            'computers' => $computers
        ]);
    }
    public function showcomputer(Computer $computer) {

        return view('simulation.computers.showcomputer', [
            'computer' => $computer
        ]);
    }
    public function login(Request $request) {
        $user = Auth::user();
        $computer = Computer::find($request->input('computerid'));

        return view('user.dashboard', [
            'user' => $user,
            'computer' => $computer
        ]);
    }
    public function setsession(Request $request) {
        DD("hELLO WORLS");
        $key = $request->input('key');
        $value = $request->input('value');
        $request->session()->put($key, $value);
        return response()->json(['message' => 'Session variable set.']);
    }
}
