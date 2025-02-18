<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;

class v7_0_overall_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentMethod::where([
            ['payment_constant', '=', 'PAYPAL'],
        ])
        ->update(['status' => 0]);
    }
}
