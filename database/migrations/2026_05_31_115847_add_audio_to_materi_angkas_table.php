<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('materi_angkas', function (Blueprint $table) {

            $table->string('audio')->nullable();

        });
    }

    public function down(): void
    {
        Schema::table('materi_angkas', function (Blueprint $table) {

            $table->dropColumn('audio');

        });
    }
};