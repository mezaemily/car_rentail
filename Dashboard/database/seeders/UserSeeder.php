<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
 
class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Pablo',
                'email' => 'pablo@gmail.com',
                'password' => Hash::make('12345678'),
                'loyalty_points' => 50,
                'loyalty_level_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Jaime ',
                'email' => 'jaime@gmail.com',
                'password' => Hash::make('12345678'),
                'loyalty_points' => 200,
                'loyalty_level_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}