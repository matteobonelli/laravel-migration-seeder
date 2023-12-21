<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 100);
            $table->string('stazione_di_partenza', 255);
            $table->string('stazione_di_arrivo', 255);
            $table->dateTimeTz('orario_di_partenza');
            $table->dateTimeTz('orario_di_arrivo');
            $table->smallInteger('codice_treno')->unique()->unsigned();
            $table->tinyInteger('numero_carrozze')->unsigned();
            $table->tinyInteger('in_orario')->default(1)->unsigned();
            $table->boolean('cancellato')->deafult(false);
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
        Schema::dropIfExists('trains');
    }
};
