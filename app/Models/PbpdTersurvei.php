<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PbpdTersurvei extends Model
{
    use HasFactory;
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
        'BebanPenyulang',
    ];

    public function permohonanPbpd()
    {
        return $this->belongsTo(PermohonanPbpd::class, 'IdPermohonan');
    }
}