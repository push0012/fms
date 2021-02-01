<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCultivatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cultivating', function (Blueprint $table) {
            $table->increments('cul_id');
            $table->date('date');
            $table->string('block');
            $table->integer('pots');
            $table->double('weight', 8, 3);
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
        Schema::dropIfExists('cultivating');
    }
}
