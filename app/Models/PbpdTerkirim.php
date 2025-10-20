<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PbpdTerkirim extends Model
{
    use SoftDeletes;

    protected $table = 'pbpd_terkirim';

    protected $fillable = [
        'IdPermohonan',
        'IdTersurvei',
        'TanggalNota',
        'Nodin'
    ];

    /**
     * Relasi ke PermohonanPbpd
     * Menggunakan `withTrashed()` agar data yang dihapus tetap bisa diakses.
     */
    public function permohonanPbpd()
    {
        return $this->belongsTo(\App\Models\PermohonanPbpd::class, 'IdPermohonan', 'id')->withTrashed();
    }

    /**
     * Relasi ke PbpdTersurvei
     * Menggunakan `withTrashed()` agar data yang dihapus tetap bisa diakses.
     */
    public function pbpdTersurvei()
    {
        return $this->belongsTo(\App\Models\PbpdTersurvei::class, 'IdTersurvei', 'id')->withTrashed();
    }
}