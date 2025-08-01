<?php
// database/migrations/2024_01_01_000001_create_cms_tables.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Templates Table
        Schema::create('templates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('layout_file')->default('layouts.cms');
            $table->boolean('is_default')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 2. Pages Table
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft');
            $table->foreignId('template_id')->nullable()->constrained('templates')->onDelete('set null');
            $table->integer('sort_order')->default(0);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();

            $table->index(['status', 'published_at']);
            $table->index('slug');
        });

        // 3. Page Components Table
        Schema::create('page_components', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')->constrained('pages')->onDelete('cascade');
            $table->string('component_type'); // hero, stats, services, charts, etc.
            $table->json('component_data'); // Configuration data for the component
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->index(['page_id', 'sort_order']);
        });

        // 4. Site Settings Table
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->text('value')->nullable();
            $table->enum('type', ['text', 'textarea', 'number', 'boolean', 'json', 'image', 'file'])->default('text');
            $table->string('group')->default('general'); // general, appearance, seo, social, etc.
            $table->string('label');
            $table->text('description')->nullable();
            $table->timestamps();

            $table->index(['group', 'key']);
        });

        // 5. Menus Table
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('url')->nullable();
            $table->foreignId('page_id')->nullable()->constrained('pages')->onDelete('cascade');
            $table->foreignId('parent_id')->nullable()->constrained('menus')->onDelete('cascade');
            $table->string('target')->default('_self'); // _self, _blank
            $table->string('icon')->nullable();
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->string('menu_location')->default('main'); // main, footer, sidebar
            $table->timestamps();

            $table->index(['menu_location', 'sort_order']);
            $table->index(['parent_id', 'sort_order']);
        });

        // 6. Media Library Table (untuk file uploads)
        Schema::create('media_library', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('file_name');
            $table->string('mime_type');
            $table->string('disk')->default('public');
            $table->string('conversions_disk')->default('public');
            $table->unsignedBigInteger('size');
            $table->json('manipulations');
            $table->json('custom_properties');
            $table->json('generated_conversions');
            $table->uuid('uuid')->nullable()->unique();
            $table->string('collection_name');
            $table->timestamps();

            $table->index(['collection_name']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('media_library');
        Schema::dropIfExists('menus');
        Schema::dropIfExists('site_settings');
        Schema::dropIfExists('page_components');
        Schema::dropIfExists('pages');
        Schema::dropIfExists('templates');
    }
};
