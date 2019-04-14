<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bikes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('brand');
            $table->string('');
            $table->string('etype');
            $table->string('edisplacement');
            $table->string('emaxpower');
            $table->string('emaxtorque');
            $table->string('sfront');
            $table->string('srear');
            $table->string('bfront');
            $table->string('brear');
            $table->string('tfront');
            $table->string('trear');
            $table->string('fuelcap');
            $table->string('esystem');
            $table->string('headlamp');
            $table->string('dlength');
            $table->string('dgroundclear');
            $table->string('dheight');
            $table->string('dwidth');
            $table->string('dwheelbase');
            $table->string('dkerbweight');
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
        Schema::dropIfExists('bikes');
    }
}
