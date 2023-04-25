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
        Schema::create('list_order', function (Blueprint $table) {
            $table->id();
            $table->string('token')->unique();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('user_order');
            $table->string('jenis_pelayanan')->nullable();
            $table->string('jenis_barang')->nullable();
            $table->string('jenis_transaksi')->default("pemasukan");
            $table->timestamp('waktu_order');
            $table->string('alamat_order')->nullable();
            $table->integer('harga_order');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_order');
    }
};
