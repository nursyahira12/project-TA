<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quiz', function (Blueprint $table) {

            $table->id();

            $table->enum('jenis_quiz', [
                'huruf',
                'berhitung'
            ]);

            $table->text('pertanyaan');

            $table->string('gambar_soal')->nullable();
            $table->string('audio_soal')->nullable();

            $table->string('gambar_opsi_a')->nullable();
            $table->string('gambar_opsi_b')->nullable();
            $table->string('gambar_opsi_c')->nullable();

            $table->enum('jawaban_benar', [
                'A',
                'B',
                'C'
            ]);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quiz');
    }
}; 