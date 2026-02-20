<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Driver;
 
class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('drivers')->insert([
            [
                'user_id' => 1,
                'license_number' => 'LIC123456',
                'license_img' => 'license1.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 2,
                'license_number' => 'LIC789101',
                'license_img' => 'license2.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
 
 