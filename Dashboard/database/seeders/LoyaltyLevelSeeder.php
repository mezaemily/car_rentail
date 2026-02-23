<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\LoyaltyLevel;
 
 
class LoyaltyLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
  DB::table('loyalty_levels')->insert([
    [
        'name' => 'Basic',
        'min_points' => 0,
        'discount_percentage' => 0,
        'free_extra_hours' => 0,
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'name' => 'Premium',
        'min_points' => 150,
        'discount_percentage' => 7,
        'free_extra_hours' => 1,
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'name' => 'Elite',
        'min_points' => 400,
        'discount_percentage' => 15,
        'free_extra_hours' => 3,
        'created_at' => now(),
        'updated_at' => now()
    ]
]);
    }
}
 