<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Rental extends Model
{
    protected $fillable = [
        'user_id',
        'car_id',
        'driver_id',
        'pickup_date',
        'return_date',
        'total_amount',
        'status'
    ];
 
    public function user()
    {
        return $this->belongsTo(User::class);
    }
 
    public function car()
    {
        return $this->belongsTo(Car::class);
    }
 
    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
 
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}