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
        Schema::create('konselors', function (Blueprint $table) {
            $table->id();
            $table->string('namaKonselor');
            $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            // $table->enum('role',['konselor','user'])->default('konselor');
            $table->string('jkKonselor');
            $table->date('tgllahirKonselor');
            $table->string('telpKonselor');
            $table->string('scanKTPKonselor');
            $table->string('scanSertifKonselor');
            $table->string('scanFotoKonselor');
            $table->boolean('statusAktivasi')->default(0);
            $table->decimal('latitudeKonselor', 10, 8)->nullable();
            $table->decimal('longitudeKonselor', 11, 8)->nullable();
            // $table->string('verify_key');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konselors');
    }
};
