<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achats', function (Blueprint $table) {
            $table->id();
            $table->date('date_achat');
            $table->string('num_pesage');
            $table->integer('poids_brute');
            $table->integer('nbre_sacs');
            $table->integer('poids_net');
            $table->integer('prix_unit');
            $table->integer('total_achat');
            $table->foreignId('fournisseur_id')->constrained();
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
        Schema::dropIfExists('achats');
    }
}
