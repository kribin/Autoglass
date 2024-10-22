<?php

namespace Modules\Vehicle\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Vehicle\Database\Factories\VehicleBrandFactory;

class VehicleBrand extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): VehicleBrandFactory
    // {
    //     // return VehicleBrandFactory::new();
    // }
}
