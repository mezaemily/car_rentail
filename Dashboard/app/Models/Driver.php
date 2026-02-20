<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Driver extends Model
{
    protected $fillable = [
        'user_id',
        'license_number',
        'license_img'
    ];
 
    // Un conductor pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
 
    // Un conductor puede estar en muchas rentas
    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}