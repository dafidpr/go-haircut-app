<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'full_name' => 'Dafid Prasetyo',
                'email' => 'dafid@gmail.com',
                'password' => Hash::make(1234),
                'created_at' => Carbon::now(),
            ],
            [
                'full_name' => 'Taufik Hidayat',
                'email' => 'taufik@gmail.com',
                'password' => Hash::make(1234),
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
