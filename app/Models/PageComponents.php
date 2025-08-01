<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageComponents extends Model
{
    use HasFactory;
    protected $fillable = [
        'page_id',
        'component_type',
        'component_data',
        'sort_order',
        'is_active',
    ];
    protected $casts = [
        'component_data' => 'array',
        'is_active' => 'boolean',
    ];
    public function page()
    {
        return $this->belongsTo(Page::class);
    }
    public function getAvailableTypes(): array
    {
        return [
            'hero' => 'Hero Section',
            'stats' => 'Statistics Section',
            'services' => 'Services Section',
            'charts' => 'Charts Section',
            'content' => 'Text Content',
            'gallery' => 'Image Gallery',
            'contact' => 'Contact Form',
        ];
    }
    public function getComponentView(): string
    {
        return "components.{$this->component_type}";
    }
}
