<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller {
    public function index() {
        return view('home');
    }

    public function show(Request $request) {

        $inputs = $request->validate([
            'make' => 'nullable',
            'model' => 'nullable',
            'registration' => 'nullable'
        ]);
        $vehicles = Vehicle::findVehicles($inputs);
        return view('home', compact('vehicles'));
    }
}
