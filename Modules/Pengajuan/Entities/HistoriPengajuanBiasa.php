<?php

namespace Modules\Pengajuan\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HistoriPengajuanBiasa extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\Pengajuan\Database\factories\HistoriPengajuanBiasaFactory::new();
    }
}
