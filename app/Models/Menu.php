<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Builder;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'url',
        'page_id',
        'parent_id',
        'target',
        'icon',
        'sort_order',
        'is_active',
        'menu_location',
    ];
    protected $casts = [
        'is_active' => 'boolean',
    ];
    public function page(): BelongsTo
    {
        return $this->belongsTo(Page::class);
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(Menu::class, 'parent_id')->orderBy('sort_order');
    }

    //scope untuk filter menu
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
    public function scopeLocation(Builder $query, string $location): Builder
    {
        return $query->where('menu_location', $location);
    }
    public function scopeRootLevel(Builder $query): Builder
    {
        return $query->whereNull('parent_id');
    }

    //mengembalikan url menu final
    public function getFinalUrlAttribute(): string
    {
        if ($this->page_id && $this->page) {
            return $this->page->url;
        }

        return $this->url ?? '#';
    }

    //memastikan menu memiliki childer menu
    public function hasChildren(): bool
    {
        return $this->children()->exists();
    }
    public static function getMenuTree(string $location = 'main'): \Illuminate\Database\Eloquent\Collection
    {
        return static::with(['children' => function ($query) {
            $query->active()->orderBy('sort_order');
        }, 'page'])
            ->active()
            ->location($location)
            ->rootLevel()
            ->orderBy('sort_order')
            ->get();
    }
}
