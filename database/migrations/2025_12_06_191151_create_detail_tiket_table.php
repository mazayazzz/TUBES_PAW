<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('detail_tiket', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pemesanan')->constrained('pemesanan', 'id_pemesanan')->onDelete('cascade'); // ubah nama kolom
            $table->decimal('harga', 12, 2);
            $table->string('kategori_tiket');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detail_tiket');
    }
};
