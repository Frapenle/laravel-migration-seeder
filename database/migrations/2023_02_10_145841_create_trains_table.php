<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            /*
            Azienda - di tipo stringa
            Stazione di partenza - di tipo stringa
            Stazione di arrivo  - di tipo stringa
            Orario di partenza  - di tipo date time
            Orario di arrivo  - di tipo date time
            Codice Treno  - di tipo stringa
            Numero Carrozze  - di tipo tiny integer
            In orario  - di tipo booleano
            Cancellato - di tipo booleano
            */
            $table->id();
            $table->string('company_name', 50);
            $table->string('departure_station', 255);
            $table->datetime('departure_time');
            $table->datetime('arrival_time');
            $table->string('train_code', 6);
            $table->tinyInteger('num_of_carriages');
            $table->boolean('is_in_time');
            $table->boolean('is_cancelled');
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
