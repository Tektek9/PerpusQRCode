<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string("judul");
            $table->string("pengarang");
            $table->string("penerbit");
            $table->string("tahun_terbit");
            $table->string("isbn")->nullable();
            $table->integer("jumlah")->length(5);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
