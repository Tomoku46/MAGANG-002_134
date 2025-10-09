<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class PbpdTerkirim extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'pbpd_terkirim';

    protected $fillable = [
        'IdPermohonan',
        'IdTersurvei',
        'TanggalNota',
        'Nodin',
    ];


    public function pbpdTersurvei()
    {
        return $this->belongsTo(PbpdTersurvei::class, 'IdTersurvei')->withTrashed();
    }

    public function permohonanPbpd()
    {
        return $this->belongsTo(\App\Models\PermohonanPbpd::class, 'IdPermohonan');
    }
}