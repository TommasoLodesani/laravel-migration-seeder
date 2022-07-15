<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Azienda',50);
            $table->string('Stazione di partenza',50);
            $table->string('Stazione di arrivo',50);
            $table->string('Stazione di arrivo',50);
            $table->time('Orario di partenza');
            $table->time('Orario di arrivo');
            $table->mediumInteger('Codice Treno');
            $table->mediumInteger('Numero Carrozze');
            $table->boolean('In orario');
            $table->boolean('Cancellato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
