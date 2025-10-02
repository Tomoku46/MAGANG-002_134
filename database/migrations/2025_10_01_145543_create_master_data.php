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
        Schema::create('master_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdPermohonan');
            $table->unsignedBigInteger('IdTersurvei');
            $table->unsignedBigInteger('IdTerkirim');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('IdTersurvei')->references('id')->on('pbpd_tersurvei')->onDelete('cascade');
             $table->foreign('IdPermohonan')->references('id')->on('permohonan_pbpd')->onDelete('cascade');
             $table->foreign('IdTerkirim')->references('id')->on('pbpd_terkirim')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_data');
    }
};
