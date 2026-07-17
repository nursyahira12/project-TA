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
        Schema::create('nilai_quiz', function (Blueprint $table) {

            $table->id();

            // Murid yang mengerjakan
            $table->foreignId('murid_id')
                ->constrained('murid')
                ->onDelete('cascade');

            // Huruf atau Berhitung
            $table->enum('jenis_quiz', [
                'huruf',
                'berhitung'
            ]);

            // Nilai akhir
            $table->integer('nilai');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_quiz');
    }
};
