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
        Schema::create('cancel_bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_bk');
            $table->foreign('id_bk')->references('id')->on('booking_konselings')->onDelete('cascade');
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
        Schema::dropIfExists('cancel_bookings');
    }
};
