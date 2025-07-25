<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorByGender extends Model
{
    use HasFactory;

    protected $fillable = [
        'bulan',
        'tahun',
        'laki_laki',
        'perempuan',
        'total'
    ];

    protected static function booted()
    {
        static::saving(function ($model) {
            $model->total = $model->laki_laki + $model->perempuan;
        });
    }
}
