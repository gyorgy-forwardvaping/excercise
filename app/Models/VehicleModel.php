<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model {
    use HasFactory;

    protected $fillable = [
        'vehicle_id',
        'type'
    ];

    public function vehicle() {
        return $this->belongsTo(\App\Models\Vehicle::class);
    }
}
