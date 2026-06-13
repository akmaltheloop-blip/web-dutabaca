<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('karyas', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade');

            $table->string('judul');
            $table->string('kategori');
            $table->text('deskripsi')->nullable();
            $table->string('file');

            $table->enum('status', [
                'Menunggu Review',
                'Diterima',
                'Ditolak',
                'Revisi'
            ])->default('Menunggu Review');

            $table->text('catatan_review')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('karyas');
    }
};