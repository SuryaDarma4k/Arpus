<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'layout_file',
        'is_default',
        'is_active',
    ];
    protected $casts = [
        'is_default' => 'boolean',
        'is_active' => 'boolean',
    ];
    public function pages()
    {
        return $this->hasMany(Page::class);
    }
    public function getDefault(): ?Template
    {
        return static::where('is_default', true)->where('is_active', true)->first();
    }
}
