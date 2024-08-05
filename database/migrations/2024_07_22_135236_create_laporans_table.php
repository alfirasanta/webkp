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
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_status');
            $table->foreign('id_status')->references('id')->on('statuses');
            $table->string('nama');
            $table->unsignedBigInteger('no_telp');
            $table->string('alamat');
            $table->unsignedBigInteger('no_pelanggan');
            $table->text('masalah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};
