<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('detail_nilai_quiz')) {
            Schema::create('detail_nilai_quiz', function (Blueprint $table) {
                $table->id();

                // Menghubungkan ke tabel nilai_quiz
                $table->unsignedBigInteger('nilai_quiz_id');

                // Soal yang dikerjakan
                $table->unsignedBigInteger('quiz_id');

                // Berapa kali mencoba
                $table->integer('percobaan');

                // Skor soal
                $table->integer('skor');

                $table->timestamps();
            });
        }

        if (!Schema::hasColumn('detail_nilai_quiz', 'nilai_quiz_id')) {
            Schema::table('detail_nilai_quiz', function (Blueprint $table) {
                $table->unsignedBigInteger('nilai_quiz_id');
            });
        }

        if (!Schema::hasColumn('detail_nilai_quiz', 'quiz_id')) {
            Schema::table('detail_nilai_quiz', function (Blueprint $table) {
                $table->unsignedBigInteger('quiz_id');
            });
        }

        $hasNilaiQuizForeignKey = DB::selectOne("SELECT 1 FROM information_schema.KEY_COLUMN_USAGE WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'detail_nilai_quiz' AND CONSTRAINT_NAME = 'detail_nilai_quiz_nilai_quiz_id_foreign'");
        if (!$hasNilaiQuizForeignKey) {
            Schema::table('detail_nilai_quiz', function (Blueprint $table) {
                $table->foreign('nilai_quiz_id')
                    ->references('id')->on('nilai_quiz')
                    ->onDelete('cascade');
            });
        }

        $hasQuizForeignKey = DB::selectOne("SELECT 1 FROM information_schema.KEY_COLUMN_USAGE WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'detail_nilai_quiz' AND CONSTRAINT_NAME = 'detail_nilai_quiz_quiz_id_foreign'");
        if (!$hasQuizForeignKey) {
            Schema::table('detail_nilai_quiz', function (Blueprint $table) {
                $table->foreign('quiz_id')
                    ->references('id')->on('quiz')
                    ->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_nilai_quiz');
    }
};
