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
        Schema::create('data_absens', function (Blueprint $table) {
            $table->id();
            $table->string('kode_karyawan');
            $table->string('nama_karyawan');
            $table->string('tanggal_absensi');
            $table->string('jam_masuk');
            $table->string('jam_keluar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_absens');
    }
};
