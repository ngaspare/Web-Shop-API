<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatNarudzbaProizvodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('narudzba_proizvod', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('narudzba_id');
            $table->unsignedBigInteger('proizvod_id');
            $table->foreign('narudzba_id')->references('id')->on('narudzbas')->onDelete('cascade');
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
        Schema::dropIfExists('narudzba_proizvod');
    }
}
