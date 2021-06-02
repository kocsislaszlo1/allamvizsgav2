<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlenariseloadokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plenariseloadok', function (Blueprint $table) {
            $table->id('id');
            $table->string('nev');
            $table->string('fokozat');
            $table->string('intezmeny');
            $table->string('eloadascim');
            $table->string('email');
            $table->string('kivonat');
            $table->time('kezdete')->nullable();
            $table->time('vege')->nullable();
            $table->unsignedBigInteger('esemenyek_id');
            $table->foreign('esemenyek_id')->references('id')->on('esemenyek')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plenariseloadok');
    }
}
