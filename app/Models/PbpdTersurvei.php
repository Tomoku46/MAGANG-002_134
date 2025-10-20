<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PbpdTersurvei extends Model
{
    use SoftDeletes;

    protected $table = 'pbpd_tersurvei';

    protected $fillable = [
        'IdPermohonan',
        'Ampere',
        'BP',
        'NilaiRabOpsi1',
        'NilaiRabOpsi2',
        'KebutuhanApp',
        'KKF',
        'StatusBeban',
        'TaggingLokasi',
        'Keterangan',
        'Penyulang',
        'BebanTrafoGISetelah',
        'BebanTrafoGI',
        'BebanTrafoGIMW',
        'KapasitasTrafo',
        'TrafoGI',
        'GarduInduk',
        'Beban',
        'BebanPenyulang'
    ];

    /**
     * Relasi ke PermohonanPbpd
     * Menggunakan `withTrashed()` agar data yang dihapus tetap bisa diakses.
     */
    public function permohonanPbpd()
    {
        return $this->belongsTo(\App\Models\PermohonanPbpd::class, 'IdPermohonan', 'id')->withTrashed();
    }
}