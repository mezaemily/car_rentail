<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class LoyaltyLevel extends Model
{
    protected $fillable = [
        'name',
        'min_points',
        'discount_percentage',
        'free_extra_hours'
    ];
 
    // Un nivel tiene muchos usuarios
    public function users()
    {
        return $this->hasMany(User::class);
    }
}