<?php

namespace App\Models;

use Filament\Forms\Components\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Page extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'content',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'status',
        'template_id',
        'sort_order',
        'published_at',
    ];
    protected $casts = [
        'published_at' => 'datetime',
    ];
    public function template()
    {
        return $this->belongsTo(Template::class);
    }
    public function components()
    {
        return $this->hasMany(PageComponents::class)->orderBy('sort_order');
    }
    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
    public function scopePublished(Builder $query): Builder
    {
        return $query->where('status', 'published')
            ->where(function ($q) {
                $q->whereNull('published_at')
                    ->orWhere('published_at', '<=', now());
            });
    }
    public function scopyBySlug(Builder $query, string $slug): Builder
    {
        return $query->where('slug', $slug);
    }
    public function setTitleAtrribute($value)
    {
        $this->attributes['title'] = $value;
        if (empty($this->attributes['slug'])) {
            $this->attributes['slug'] = Str::slug($value);
        }
    }
    public function getMetaTitleAttribute($value)
    {
        return $value ?? $this->title;
    }
    public function getUrlAttribute(): string
    {
        return route('page.show', $this->slug);
    }
    public function isPublished(): bool
    {
        return $this->status === 'published' &&
            (is_null($this->published_at) || $this->published_at <= now());
    }
}
