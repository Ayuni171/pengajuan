<?php

namespace Modules\Pengajuan\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PengajuanDinas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    protected static function newFactory()
    {
        // return \Modules\Pengajuan\Database\factories\PengajuanDinasFactory::new();
    }
}
