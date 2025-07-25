<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectVisitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'bulan', 
        'tahun',
        'titik_layanan', 
        'anggota_baru', 
        'pengunjung', 
        'buku_yang_dibaca',
        'jumlah'
    ];
    protected static function booted()
    {
        static::saving(function ($model) {
            $model->jumlah = $model->titik_layanan + $model->anggota_baru + $model->pengunjung + $model->buku_yang_dibaca;
        });
    }
}
