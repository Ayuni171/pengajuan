<?php

namespace Modules\Pengajuan\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PengajuanProjek extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    protected static function newFactory()
    {
        // return \Modules\Pengajuan\Database\factories\PengajuanProjekFactory::new();
    }
}
