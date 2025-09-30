<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PbpdTersurvei extends Model
{
    use HasFactory;

    protected $table = 'pbpd_tersurvei';

    protected $fillable = [
        'IdPermohonan',
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
        'BebanPenyulang',
    ];

    public function permohonanPbpd()
    {
        return $this->belongsTo(PermohonanPbpd::class, 'IdPermohonan');
    }
}