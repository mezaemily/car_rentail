<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Payment;
 
 
class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payments')->insert([
            [
                'rental_id' => 1,
                'amount' => 2400,
                'payment_method' => 'card',
                'transaction_id' => 'TXN123456',
                'status' => 'paid',
                'payment_date' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
 