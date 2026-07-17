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
        Schema::create('detail_nilai_quiz', function (Blueprint $table) {

            $table->id();

            // Menghubungkan ke tabel nilai_quiz
            $table->foreignId('nilai_quiz_id')
                ->constrained('nilai_quiz')
                ->onDelete('cascade');

            // Soal yang dikerjakan
            $table->foreignId('quiz_id')
                ->constrained('quiz')
                ->onDelete('cascade');

            // Berapa kali mencoba
            $table->integer('percobaan');

            // Skor soal
            $table->integer('skor');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_nilai_quiz');
    }
};
