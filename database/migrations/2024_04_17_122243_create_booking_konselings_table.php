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
        Schema::create('booking_konselings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_jk');
            $table->foreign('id_jk')->references('id')->on('jadwal_konselings')->onDelete('cascade');
            $table->unsignedBigInteger('id_member');
            $table->foreign('id_member')->references('id')->on('users')->onDelete('cascade');
            $table->string('buktiBayar');
            $table->boolean('isPaid');
            $table->boolean('isDone');
            $table->boolean('isCancel');
            $table->boolean('byCredit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_konselings');
    }
};
