<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategorijaProizvodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategorija_proizvod', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('kategorija_id');
            $table->unsignedBigInteger('proizvod_id');
            $table->foreign('kategorija_id')->references('id')->on('kategorijas')->onDelete('cascade');
            $table->foreign('proizvod_id')->references('id')->on('proizvods')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategorija_proizvod');
    }
}
