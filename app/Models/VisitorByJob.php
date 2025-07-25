<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorByJob extends Model
{
    use HasFactory;

    protected $fillable = [
        'bulan', 
        'tahun', 
        'pelajar', 
        'mahasiswa', 
        'pns', 
        'umum', 
        'lainnya',
        'jumlah'
    ];

    protected static function booted()
    {
        static::saving(function ($model) {
            $model->jumlah = $model->pelajar + $model->mahasiswa + $model->pns + $model->umum + $model->lainnya;
        });
    }
}
