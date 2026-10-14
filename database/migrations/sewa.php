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
            $table->BIGINT('kendaraan_id');
            $table->Varchar('nama_penyewa');
            $table->date('tanggal_mulai');
            $table->integer('lama_sewa');
            $table->integer('total_biaya');
            $tabel->timestamp('created_at, updated_at');
        });
    }
};
