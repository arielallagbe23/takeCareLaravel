<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementeffectuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiementeffectues', function (Blueprint $table) {
            $table->id();
            $table->string('numcmd');
            $table->string('idpaiement');
            $table->string('pseudoorangemoney');
            $table->string('numorangemoney');
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
        Schema::dropIfExists('paiementeffectues');
    }
}
