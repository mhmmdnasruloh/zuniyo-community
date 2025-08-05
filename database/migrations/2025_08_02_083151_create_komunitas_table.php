<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomunitasTable extends Migration
{
    /**
     * jalankan migrations.
     */
    public function up(): void
    {
        Schema::create('komunitas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('deskripsi')->nullable();
            $table->string('universitas');
            $table->timestamps();
        });
    }

    /**
     * SIMPAN migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komunitas');
    }
}
