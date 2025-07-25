<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorByBookType extends Model
{
    use HasFactory;

    protected $fillable = [
        'bulan', 
        'tahun',
        '000', 
        '100', 
        '200', 
        '300', 
        '400',
        '500', 
        '600', 
        '700', 
        '800', 
        '900',
        'fiksi', 
        'jumlah'
    ];

    protected static function booted()
    {
        static::saving(function ($model) {
            $model->jumlah =
                ($model->{'000'} ?? 0) +
                ($model->{'100'} ?? 0) +
                ($model->{'200'} ?? 0) +
                ($model->{'300'} ?? 0) +
                ($model->{'400'} ?? 0) +
                ($model->{'500'} ?? 0) +
                ($model->{'600'} ?? 0) +
                ($model->{'700'} ?? 0) +
                ($model->{'800'} ?? 0) +
                ($model->{'900'} ?? 0) +
                ($model->fiksi ?? 0);
        });
    }
}
