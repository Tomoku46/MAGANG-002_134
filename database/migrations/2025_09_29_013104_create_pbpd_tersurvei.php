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
        Schema::create('pbpd_tersurvei', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('permohonan_pbpd_id'); // FK field
            $table->foreign('permohonan_pbpd_id')->references('id')->on('permohonan_pbpd')->onDelete('cascade');
            $table->string('BP')->nullable();
            $table->string('NilaiRabOpsi1')->nullable();
            $table->string('NilaiRabOpsi2')->nullable();
            $table->string('KebutuhanApp')->nullable();
            $table->string('KKF')->nullable();
            $table->string('StatusBeban')->nullable();
            $table->string('TaggingLokasi')->nullable();
            $table->text('Keterangan')->nullable();
            $table->string('Status')->nullable();
            $table->decimal('BebanTrafoGISetelah')->nullable();
            $table->string('BebanTrafoGI')->nullable();
            $table->string('KapasitasTrafo')->nullable();
            $table->string('TrafoGI')->nullable();
            $table->string('Gardulnduk')->nullable(); 
            $table->string('Beban')->nullable();
            $table->string('BebanPenyulang')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pbpd_tersurvei');
    }
};
