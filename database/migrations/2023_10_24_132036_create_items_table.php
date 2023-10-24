<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('kondisi_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('kondisi_id')->references('id')->on('kondisi');
            $table->string('keterangan')->nullable();;
            $table->string('kecacatan');
            $table->integer('Jumlah')->nullable();
            $table->string('Gambar');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
