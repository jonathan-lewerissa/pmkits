<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('nrp', 10);
            $table->string('email', 50)->unique();
            $table->string('jk', 1);
            $table->string('asal', 20);
            $table->date('tgl_lahir');
            $table->string('alamat_sby', 150);
            $table->string('alamat_asal', 150);
            $table->string('gereja', 50);
            $table->string('no_hp',13);
            $table->string('line_id',30);
            $table->string('talenta',50);
            $table->bigInteger('kehadiran_pj')->unsigned();
            $table->bigInteger('kehadiran_pd')->unsigned();
            $table->bigInteger('kehadiran_rapat')->unsigned();
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
        Schema::dropIfExists('mahasiswas');
    }
}
