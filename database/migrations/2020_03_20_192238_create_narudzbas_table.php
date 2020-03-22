<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNarudzbasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('narudzbas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->float('ukupna_cijena');
            $table->string('ime');
            $table->string('prezime');
            $table->string('email');
            $table->integer('broj_telefona');
            $table->string('adresa');
            $table->string('grad');
            $table->string('drzava');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('narudzbas');
    }
}
