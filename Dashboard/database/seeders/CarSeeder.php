<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Car;
 
 
class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->insert([
            [
                'brand_id' => 1,
                'model' => 'Corolla',
                'year' => 2022,
                'color' => 'Blanco',
                'license_plate' => 'ABC123',
                'mileage' => 15000,
                'lat' => 31.6904,
                'lng' => -106.4245,
                'is_premium' => false,
                'rental_count' => 3,
                'daily_rate' => 800,
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'brand_id' => 3,
                'model' => 'X5',
                'year' => 2023,
                'color' => 'Negro',
                'license_plate' => 'XYZ789',
                'mileage' => 8000,
                'lat' => 31.7000,
                'lng' => -106.4300,
                'is_premium' => true,
                'rental_count' => 1,
                'daily_rate' => 2500,
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
 
 