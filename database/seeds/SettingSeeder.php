<?php

use Illuminate\Database\Seeder;
use App\Models\Setting;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::insert([
            [
                'groups'    => 'General',
                'options'   => 'web_name',
                'value'     => 'Go Haircut App',
                'created_by'=> 1,
                'updated_by'=> 1,
                'created_at'=> Carbon::now(),
            ],
            [
                'groups'    => 'General',
                'options'   => 'web_url',
                'value'     => 'http://localhost/go-haircut-app',
                'created_by'=> 1,
                'updated_by'=> 1,
                'created_at'=> Carbon::now(),
            ],
            [
                'groups'    => 'General',
                'options'   => 'web_description',
                'value'     => 'Kami merupakan platform untuk menghubungkan antara pelanggan dan barber yang bermaksud untuk    mempermudah anda untuk menemukan barber terbaik dan siap membuat anda ganteng maksimal.',
                'created_by'=> 1,
                'updated_by'=> 1,
                'created_at'=> Carbon::now(),
            ],
            [
                'groups'    => 'General',
                'options'   => 'web_keyword',
                'value'     => 'Ganteng Maksimal Dengan Go Haircut App',
                'created_by'=> 1,
                'updated_by'=> 1,
                'created_at'=> Carbon::now(),
            ],
            [
                'groups'    => 'General',
                'options'   => 'web_author',
                'value'     => 'Go Haircut App',
                'created_by'=> 1,
                'updated_by'=> 1,
                'created_at'=> Carbon::now(),
            ],
            [
                'groups'    => 'General',
                'options'   => 'email',
                'value'     => 'gohaircutapp@gmail.com',
                'created_by'=> 1,
                'updated_by'=> 1,
                'created_at'=> Carbon::now(),
            ],
            [
                'groups'    => 'General',
                'options'   => 'telephone',
                'value'     => '085635625366',
                'created_by'=> 1,
                'updated_by'=> 1,
                'created_at'=> Carbon::now(),
            ],
            [
                'groups'    => 'General',
                'options'   => 'address',
                'value'     => 'Banyuwangi, Jawa Timur, Indonesia',
                'created_by'=> 1,
                'updated_by'=> 1,
                'created_at'=> Carbon::now(),
            ],
            [
                'groups'    => 'General',
                'options'   => 'facebook',
                'value'     => 'https://www.facebook.com/gohaircut',
                'created_by'=> 1,
                'updated_by'=> 1,
                'created_at'=> Carbon::now(),
            ],
            [
                'groups'    => 'General',
                'options'   => 'twitter',
                'value'     => 'https://www.twitter.com/gohaircut',
                'created_by'=> 1,
                'updated_by'=> 1,
                'created_at'=> Carbon::now(),
            ],
            [
                'groups'    => 'General',
                'options'   => 'twitter',
                'value'     => 'https://www.youtube.com/c/gohaircut',
                'created_by'=> 1,
                'updated_by'=> 1,
                'created_at'=> Carbon::now(),
            ],
            [
                'groups'    => 'Image',
                'options'   => 'favicon',
                'value'     => 'favicon.png',
                'created_by'=> 1,
                'updated_by'=> 1,
                'created_at'=> Carbon::now(),
            ],
            [
                'groups'    => 'Image',
                'options'   => 'logo',
                'value'     => 'logo.png',
                'created_by'=> 1,
                'updated_by'=> 1,
                'created_at'=> Carbon::now(),
            ],
            [
                'groups'    => 'Mail',
                'options'   => 'mail_username',
                'value'     => 'noreply@gohaircut.com',
                'created_by'=> 1,
                'updated_by'=> 1,
                'created_at'=> Carbon::now(),
            ],
            [
                'groups'    => 'Mail',
                'options'   => 'mail_password',
                'value'     => '-',
                'created_by'=> 1,
                'updated_by'=> 1,
                'created_at'=> Carbon::now(),
            ]
        ]);
    }
}
