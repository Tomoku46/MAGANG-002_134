<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermohonanPbpd extends Model
{
    use SoftDeletes;

    protected $table = 'permohonan_pbpd';
    
    protected $fillable = [
        'IdPel',
        'NamaPemohon',
        'TglSuratDiterima',
        'NoWhatsapp',
        'AplManajemenSurat',
        'PermoDayaLama',
        'PermoDayaBaru',
        'SelisihDaya',
        'Status'
    ];

    /**
     * Relasi ke PbpdTersurvei
     * Menggunakan `withTrashed()` agar data yang dihapus tetap bisa diakses.
     */
    public function pbpdTersurvei()
    {
        return $this->hasOne(\App\Models\PbpdTersurvei::class, 'IdPermohonan', 'id')->withTrashed();
    }

    /**
     * Relasi ke PbpdTerkirim
     * Menggunakan `withTrashed()` agar data yang dihapus tetap bisa diakses.
     */
    public function pbpdTerkirim()
    {
        return $this->hasOne(\App\Models\PbpdTerkirim::class, 'IdPermohonan', 'id')->withTrashed();
    }
}
