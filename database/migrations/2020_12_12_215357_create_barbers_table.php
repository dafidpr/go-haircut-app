<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barbers', function (Blueprint $table) {
            $table->id();
            $table->string('barber_name', 100);
            $table->string('owner_name', 100);
            $table->string('profile_pic', 32)->default('barber_default.png');
            $table->string('email', 128)->unique();
            $table->string('password', 255)->nullable(FALSE);
            $table->string('whatsapp', 12)->nullable();
            $table->text('address')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->string('opening_hours', 70)->default('Senin - Jumat, 09.00 - 21.00');
            $table->timestamp('last_login')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barbers');
    }
}
