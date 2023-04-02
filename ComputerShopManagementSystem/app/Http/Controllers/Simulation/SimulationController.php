<?php

namespace App\Http\Controllers\Simulation;

use App\Http\Controllers\Controller;
use App\Models\Computer;
use Illuminate\Http\Request;

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
        dd($request->computerid);
    }
}
