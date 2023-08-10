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
        Schema::create('tikets', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->bigInteger('nik');
            $table->bigInteger('telpon');
            $table->string('negara');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('alamat');
            $table->integer('umur');
            $table->string('tempat');
            $table->date('tanggalkeb');
            $table->integer('jumlah');
            $table->string('status')->default('Diproses');
            $table->bigInteger('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tikets');
    }
};
