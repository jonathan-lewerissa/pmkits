<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('email', 50)->unique();
            $table->string('jk', 1);
            $table->string('asal', 20);
            $table->date('tgl_lahir');
            $table->string('alamat', 150);
            $table->string('gereja', 50);
            $table->string('no_hp',13);
            $table->string('pekerjaan', 50);
            $table->string('tempat_kerja', 50);
            $table->string('asal_fakultas', 10);
            $table->string('asal_departemen', 50);
            $table->string('angkatan', 4);
            $table->rememberToken();
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
        Schema::dropIfExists('alumnis');
    }
}
