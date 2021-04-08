<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSzekciokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('szekciok', function (Blueprint $table) {
            $table->id('id');
            $table->string('szekcionev');
            $table->datetime('idopont');
            $table->string('link');
            $table->tinyInteger('online');
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
        Schema::dropIfExists('szekciok');
    }
}
