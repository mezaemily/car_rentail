<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Rental;
 
class RentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rentals')->insert([
            [
                'user_id' => 1,
                'car_id' => 1,
                'driver_id' => 1,
                'pickup_date' => now(),
                'return_date' => now()->addDays(3),
                'total_amount' => 2400,
                'status' => 'completed',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
 