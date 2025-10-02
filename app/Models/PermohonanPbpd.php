<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermohonanPbpd extends Model
{
    use SoftDeletes;

    protected $table = 'permohonan_pbpd';
    
    protected $fillable = ['IdPel','NamaPemohon', 'TglSuratDiterima', 'NoWhatsapp', 'AplManajemenSurat', 'PermoDayaLama', 'PermoDayaBaru', 'SelisihDaya', 'Ampere','Status'];
    
    public function PbpdTersurvei()
    {
        return $this->hasOne(\App\Models\PbpdTersurvei::class, 'IdPermohonan', 'id');

    }
    public function pbpdTerkirim() {
    return $this->hasOne(\App\Models\PbpdTerkirim::class, 'IdPermohonan');
    }
    
}
