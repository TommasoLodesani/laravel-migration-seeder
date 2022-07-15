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
            $table->string('azienda',50);
            $table->string('stazione_di_partenza',50);
            $table->string('stazione_di_arrivo',50);
            $table->time('orario_di_partenza');
            $table->time('orario_di_arrivo');
            $table->mediumInteger('codice_treno');
            $table->mediumInteger('numero_carrozze');
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
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
