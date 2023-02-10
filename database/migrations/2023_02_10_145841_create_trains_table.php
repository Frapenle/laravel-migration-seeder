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
