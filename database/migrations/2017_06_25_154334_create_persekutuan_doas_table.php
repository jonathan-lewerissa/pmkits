<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersekutuanDoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persekutuan_doas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20);
            $table->string('fakultas', 10);
            $table->string('departemen', 50);
            $table->string('notes', 50);
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
        Schema::dropIfExists('persekutuan_doas');
    }
}
