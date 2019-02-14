<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersekutuanJumatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persekutuan_jumats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20);
            $table->date('date');
            $table->bigInteger('absence')->unsigned();
            $table->bigInteger('persembahan')->unsigned();
            $table->string('notes', 200);
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
        Schema::dropIfExists('persekutuan_jumats');
    }
}
