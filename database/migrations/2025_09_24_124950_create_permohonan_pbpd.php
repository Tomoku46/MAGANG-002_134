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
        Schema::create('permohonan_pbpd', function (Blueprint $table) {
            $table->id();
            $table->foreignId('iduser')->constrained('users')->onDelete('cascade');
            $table->integer('IdPel')->uniqid;
            $table->string('NamaPemohon');
            $table->date('TglSuratDiterima');
            $table->string('NoWhatsapp');
            $table->string('AplManajemenSurat');
            $table->string('PermoDayaLama');
            $table->string('PermoDayaBaru');
            $table->string('SelisihDaya');
            $table->string('Ampere');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permohonan_pbpd');
    }
};
