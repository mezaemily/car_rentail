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
                'name' => 'Bronze',
                'min_points' => 0,
                'discount_percentage' => 0,
                'free_extra_hours' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Silver',
                'min_points' => 100,
                'discount_percentage' => 5,
                'free_extra_hours' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Gold',
                'min_points' => 300,
                'discount_percentage' => 10,
                'free_extra_hours' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
 