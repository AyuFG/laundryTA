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
        Schema::create('detail_order', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('list_id')->nullable();
            $table->foreign('list_id')->references('id')->on('list_order');
            $table->string('keluhan');
            $table->string('foto_keluhan');
            $table->integer('opsi_pengiriman');
            $table->string('pembayaran');
            $table->string('foto_pembayaran');
            $table->string('status_order');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_order');
    }
};
