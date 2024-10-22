<?php

namespace Modules\GlassType\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\GlassType\Database\Factories\GlassTypeFactory;

class GlassType extends Model
{
    use HasFactory;

    const STATUS_ENABLED = 'ENABLED';
    const STATUS_DISABLED = 'DISABLED';

    const status = [
        self::STATUS_ENABLED,
        self::STATUS_DISABLED
    ];
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'size',
        'description',
        'status'
    ];

    // protected static function newFactory(): GlassTypeFactory
    // {
    //     // return GlassTypeFactory::new();
    // }
}
