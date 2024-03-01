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
        Schema::create('ulasans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users')->onDeleteCascade();
            $table->foreignId('id_buku')->constrained('bukus')->onDeleteCascade();
            $table->integer('rating');
            $table->string('ulasan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ulasans');
    }

};

