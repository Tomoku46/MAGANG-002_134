<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PermohonanPbpd extends Model
{
    protected $table ='permohonan_pbpd';
    protected $fillable = ['IdPel','NamaPemohon', 'TglSuratDiterima', 'NoWhatsapp', 'AplManajemenSurat', 'PermoDayaLama', 'PermoDayaBaru', 'SelisihDaya', 'Ampere'];
}
