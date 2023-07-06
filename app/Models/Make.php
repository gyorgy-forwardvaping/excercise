<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Make extends Model {
    use HasFactory;

    public function vehicle() {
        return $this->belongsTo(\App\Models\Vehicle::class);
    }
}
