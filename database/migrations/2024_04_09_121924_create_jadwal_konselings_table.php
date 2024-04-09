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
        Schema::create('jadwal_konselings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_konselor');
            $table->foreign('id_konselor')->references('id')->on('konselors')->onDelete('cascade');
            $table->date('tgl_konseling');
            $table->time('jam_konseling');
            $table->string('topik_konseling');
            $table->boolean('isBooked');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_konselings');
    }
};
