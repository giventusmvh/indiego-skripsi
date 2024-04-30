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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            // $table->enum('role',['konselor','user'])->default('konselor');
            $table->string('jkUser');
            $table->date('tgllahir');
            $table->string('telp');
            $table->string('alamat')->default('Masukkan Alamat')->nullable();;
            $table->string('scanFoto');
            $table->decimal('latitudeUser', 10, 8)->default(-7.8011733719147065)->nullable();
            $table->decimal('longitudeUser', 11, 8)->default(110.36477482416575)->nullable();
            $table->integer('creditPoint')->default(0)->nullable();
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
        Schema::dropIfExists('users');
    }
};
