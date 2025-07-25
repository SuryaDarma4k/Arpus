<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembershipRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'bulan', 
        'tahun',
        'laki_laki',
        'perempuan',
        'jumlah'
    ];

    protected static function booted()
    {
        static::saving(function ($model) {
            $model->jumlah = $model->laki_laki + $model->perempuan;
        });
    }
}
