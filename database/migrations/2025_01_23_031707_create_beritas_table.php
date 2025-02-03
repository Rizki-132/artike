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
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->string('judul')->unique();
            $table->unsignedBigInteger('kategori_id')->foreign('kategori_id')->references('id')->on('kategoris')->onDelete('cascade');
            $table->string('desk_singkat');
            $table->text('desk_detail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
