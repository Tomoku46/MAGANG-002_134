<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterData extends Model
{
    protected $table = 'pbpd_terkirim';

    protected $fillable = [
        'IdPermohonan',
        'IdTersurvei',
        'IdTerkirim',
        
    ];


    public function pbpdTersurvei()
    {
        return $this->belongsTo(\App\Models\PbpdTersurvei::class, 'IdTersurvei');
    }

    public function permohonanPbpd()
    {
        return $this->belongsTo(\App\Models\PermohonanPbpd::class, 'IdPermohonan');
    }
    public function pbpdTerkirim()
    {
        return $this->belongsTo(\App\Models\PbpdTerkirim::class, 'IdTerkirim');
    }
}