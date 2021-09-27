<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSortiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sorties', function (Blueprint $table) {
            $table->id();
            $table->string('num_connaiss');
            $table->integer('poids_brute');
            $table->integer('nbre_sacs');
            $table->integer('poids_net');
            $table->integer('prix_unit');
            $table->string('nature_produit');
            $table->foreignId('partenaire_id')->constrained();
            $table->foreignId('section_id')->constrained();
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
        Schema::dropIfExists('sorties');
    }
}
