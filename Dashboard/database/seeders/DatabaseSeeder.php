<?php
 
namespace Database\Seeders;
 
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

 
class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
 
    /**
     * Seed the application's database.
     */
 
    public function run(): void
    {
    $this->call([
        LoyaltyLevelSeeder::class,
        BrandSeeder::class,
        UserSeeder::class,
        DriverSeeder::class,
        CarSeeder::class,
        RentalSeeder::class,
        PaymentSeeder::class,
    ]);
    }
}
 