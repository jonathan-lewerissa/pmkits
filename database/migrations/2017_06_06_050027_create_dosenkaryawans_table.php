<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDosenkaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosenkaryawans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('pekerjaan', 10);
            $table->string('fakultas', 10);
            $table->string('departemen', 50);
            $table->string('email', 50)->unique();
            $table->string('jk', 1);
            $table->string('asal', 20);
            $table->date('tgl_lahir');
            $table->string('alamat', 150);
            $table->string('gereja', 50);
            $table->string('no_hp',13);
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
        //
    }
}
