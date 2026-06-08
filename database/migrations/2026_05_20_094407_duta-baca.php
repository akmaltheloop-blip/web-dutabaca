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
    Schema::create()'products', function (Blueprint $table) {
        $table->id(); // Membuat kolom 'id' otomatis (Primary Key & Auto Increment)
        $table->string('nama_produk'); // Kolom teks untuk nama produk
        $table->integer('harga'); // Kolom angka untuk harga
        $table->text('deskripsi')->nullable(); // Kolom teks panjang, boleh kosong
        $table->timestamps(); // Otomatis membuat kolom 'created_at' dan 'updated_at'
        </style>
    }
    }

    public function down(): void
    {
        //
    }
};
