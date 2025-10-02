<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PbpdTerkirim extends Model
{
    protected $table = 'pbpd_terkirim';

    protected $fillable = [
        'IdPermohonan',
        'IdTersurvei',
        'TanggalNota',
        'Nodin',
    ];


    public function pbpdTersurvei()
    {
        return $this->belongsTo(\App\Models\PbpdTersurvei::class, 'IdTersurvei');
    }

    public function permohonanPbpd()
    {
        return $this->belongsTo(\App\Models\PermohonanPbpd::class, 'IdPermohonan');
    }
}