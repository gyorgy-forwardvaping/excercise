<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicle extends Model {
    use HasFactory;

    public function make() {
        return $this->hasOne(\App\Models\Make::class);
    }

    public function vehicleModel() {
        return $this->hasOne(\App\Models\VehicleModel::class);
    }

    public function registration() {
        return $this->hasOne(\App\Models\Registration::class);
    }

    public static function findVehicles($args) {
        $result = DB::table('vehicles')
            ->join('makes', 'makes.vehicle_id', '=', 'vehicles.id')
            ->join('vehicle_models', 'vehicle_models.vehicle_id', '=', 'vehicles.id')
            ->join('registrations', 'registrations.vehicle_id', '=', 'vehicles.id');
        if (isset($args['make'])) {
            $result->where('brand', '=', $args['make']);
        }
        if (isset($args['model'])) {
            $result->where('type', '=', $args['model']);
        }
        if (isset($args['registration'])) {
            $result->where('number_plate', '=', $args['registration']);
        }
        return $result->get();
    }
}
