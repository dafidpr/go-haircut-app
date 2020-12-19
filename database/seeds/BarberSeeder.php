<?php

use Illuminate\Database\Seeder;
use App\Models\Barber;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class BarberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barber::insert([
            [
                'barber_name' => 'Hairnerds Studio',
                'owner_name' => 'Irul Setiawan',
                'email' => 'irulaa@gmail.com',
                'password' => Hash::make(1234),
                'whatsapp' => '085635263546',
                'address' => 'Karangrejo, Banyuwangi',
                'lat' => '-6.9016181989514065',
                'long' => '107.60874728587352',
                'opening_hours' => 'Senin - Jumat, 09.00 - 21.00',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
