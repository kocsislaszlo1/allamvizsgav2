<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEloadokSzekciokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eloadok_szekciok', function (Blueprint $table) {
            $table->unsignedBigInteger('eloado_id');
            $table->time('kezdete')->nullable();
            $table->time('vege')->nullable();
            $table->foreign('eloado_id')->references('id')->on('eloadok')->onDelete('cascade');
           $table->unsignedBigInteger('szekcio_id');
             $table->foreign('szekcio_id')->references('id')->on('szekciok')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eloadok_szekciok');
    }
}
// php artisan make:model Esemenyek
// php artisan make:model Eloadok
// php artisan make:model Moderatorok
// php artisan make:model Szekciok
// php artisan make:model Student


