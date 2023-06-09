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
        Schema::create('sublayanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('layanan_id')->nullable();
            $table->foreign('layanan_id')->references('id')->on('layanan')
            ->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('ikon_sub')->nullable();
            $table->string('nama_sub');
            $table->text('deskripsi_sub');
            $table->integer('waktu_sub');
            $table->integer('harga_sub');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sublayanan');
    }
};
