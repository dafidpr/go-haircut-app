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
                'full_name' => 'Suzu Aoba',
                'email' => 'suzuao@gmail.com',
                'password' => Hash::make(1234),
                'phone_number' => '12345678',
                'role_id' => '1',
                'created_at' => Carbon::now(),
            ],
            [
                'full_name' => 'Aoi Sora',
                'email' => 'aoifutaba@icloud.com',
                'password' => Hash::make(1234),
                'phone_number' => '12345678',
                'role_id' => '2',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
