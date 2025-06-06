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
    Schema::create('questions', function (Blueprint $table) {
        $table->id();
        $table->text('soal');                // Isi pertanyaan
        $table->string('opsi_a');            // Pilihan A
        $table->string('opsi_b');            // Pilihan B
        $table->string('opsi_c');            // Pilihan C
        $table->string('opsi_d');            // Pilihan D
        $table->enum('jawaban_benar', ['a', 'b', 'c', 'd']); // Jawaban benar
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
