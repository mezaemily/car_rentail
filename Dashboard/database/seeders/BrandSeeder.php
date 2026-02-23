<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Brand;
 
 
class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('brands')->insert([
    ['name' => 'Nissan',
     'img' => 'nissan.png', 
     'created_at' => now(), 
     'updated_at' => now()],

    ['name' => 'Honda',
     'img' => 'honda.png', 
     'created_at' => now(), 
     'updated_at' => now()],

    ['name' => 'BMW', 
     'img' => 'bmw.png', 
     'created_at' => now(),
     'updated_at' => now()],
]);
    }
}
 