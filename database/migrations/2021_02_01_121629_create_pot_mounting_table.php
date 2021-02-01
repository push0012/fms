<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePotMountingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pot_mounting', function (Blueprint $table) {
            $table->increments('mou_id');
            $table->date('date');
            $table->string('block');
            $table->integer('quantity');
            $table->string('action');
            $table->integer('rows');
            $table->string('type');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pot_mounting');
    }
}
