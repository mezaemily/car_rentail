<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Car extends Model
{
    protected $fillable = [
        'brand_id',
        'model',
        'year',
        'color',
        'license_plate',
        'mileage',
        'lat',
        'lng',
        'is_premium',
        'rental_count',
        'daily_rate',
        'status'
    ];
 
    // Un auto pertenece a una marca
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
 
    // Un auto puede tener muchas rentas
    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
 