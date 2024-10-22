<?php

namespace Modules\Vehicle\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Vehicle\Database\Factories\VehicleSeriesFactory;

class VehicleSeries extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): VehicleSeriesFactory
    // {
    //     // return VehicleSeriesFactory::new();
    // }
}
