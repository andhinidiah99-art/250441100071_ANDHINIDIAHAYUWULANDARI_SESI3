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
            $table->Varchar('plat_nomor');
            $table->Varchar('merek');
            $table->enum('jenis')->nullable();
            $table->integer('tarif_per_hari');
            $table->timestamps('created_at, update_at');
        });
    }
};
