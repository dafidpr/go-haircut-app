<?php

use Illuminate\Database\Seeder;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::insert([
            [
                'customer_name' => 'Dimas Anggara',
                'email' => 'dimas@gmail.com',
                'password' => Hash::make(1234),
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
