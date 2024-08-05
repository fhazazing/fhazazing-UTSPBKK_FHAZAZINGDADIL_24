<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('harga_hari_inis', function (Blueprint $table) {
            $table->bigIncrements('id_hotel');
            $table->integer('harga');
            $table->integer('avalaible_room');
            $table->date('tanggal');
            $table->unsignedBigInteger('id_kamar');
            $table->foreign('id_kamar')->references('id')->on('kamars');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('harga_hari_inis');
    }
};
