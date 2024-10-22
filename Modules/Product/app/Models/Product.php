<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Product\Database\Factories\ProductFactory;

class Product extends Model
{
    use HasFactory;
    const STATUS_ENABLED = 'ENABLED';
    const STATUS_DISABLED = 'DISABLED';

    const status = [
        self::STATUS_ENABLED,
        self::STATUS_DISABLED
    ];

    const STOCK_AVAILABLE = 'IN STOCK';
    const STOCK_UNAVAILABLE = 'OUT OF STOCK';

    const stock = [
        self::STOCK_AVAILABLE,
        self::STOCK_UNAVAILABLE
    ];
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'description',
        'sku',
        'price',
        'image',
        'status',
        'stock',
        'vehicle_type_id',
        'vehicle_brand_id',
        'vehicle_model_id',
        'vehicle_series_id'
    ];

    // protected static function newFactory(): ProductFactory
    // {
    //     // return ProductFactory::new();
    // }
}
