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
        Schema::create('riwayat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_guru')->constrained('guru')->onDelete('cascade');
            $table->foreignId('id_mapel')->constrained('mata_pelajaran')->onDelete('cascade');
            $table->string('type', 15);
            $table->string('kelas', 10);
            $table->string('rombel', 25);
            $table->string('alokasi_jp', 5);
            $table->string('total_jp', 10);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
