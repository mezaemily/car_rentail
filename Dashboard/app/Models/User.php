<?php
 
namespace App\Models;
 
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
 
use Tymon\JWTAuth\Contracts\JWTSubject;
class User extends Authenticatable implements JWTSubject 
{
    use Notifiable;
 
    protected $fillable = [
        'name',
        'email',
        'password',
        'loyalty_points',
        'loyalty_level_id'
    ];
 
    protected $hidden = [
        'password',
        'remember_token',
    ];
 
    // Un usuario pertenece a un nivel
    public function loyaltyLevel()
    {
        return $this->belongsTo(LoyaltyLevel::class);
    }
 
    // Un usuario puede tener muchos conductores
    public function drivers()
    {
        return $this->hasMany(Driver::class);
    }
 
    // Un usuario puede tener muchas rentas
    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
     /**
     * Get the identifier that will be stored in the JWT token.
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return an array with custom claims to be added to the JWT token.
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
 