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
        Schema::create('reschedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_jk');
            $table->foreign('id_jk')->references('id')->on('jadwal_konselings')->onDelete('cascade');
            $table->unsignedBigInteger('id_bk');
            $table->foreign('id_bk')->references('id')->on('booking_konselings')->onDelete('cascade');
            $table->unsignedBigInteger('id_member');
            $table->foreign('id_member')->references('id')->on('users')->onDelete('cascade');
            $table->date('tgl_ganti');
            $table->time('jam_ganti');
            $table->boolean('isConfirmed');
            $table->boolean('isRejected');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reschedules');
    }
};
