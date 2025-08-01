{{-- resources/views/pages/dynamic.blade.php --}}
@extends('layouts.app')

@section('content')
    @if ($content)
        @foreach ($content as $component)
            @switch($component['type'])
                @case('hero')
                    @include('components.hero', ['data' => $component['data']])
                @break

                @case('services')
                    @include('components.services', ['data' => $component['data']])
                @break

                @case('features')
                    @include('components.features', ['data' => $component['data']])
                @break

                @case('cta')
                    @include('components.cta', ['data' => $component['data']])
                @break

                @case('text')
                    @include('components.text', ['data' => $component['data']])
                @break

                @default
                    {{-- Default component atau skip --}}
            @endswitch
        @endforeach
    @else
        {{-- Fallback content jika tidak ada konten --}}
        <section class="py-24 text-center">
            <div class="max-w-4xl mx-auto px-4">
                <h1 class="text-4xl font-bold text-white mb-6">{{ $page->title }}</h1>
                @if ($page->excerpt)
                    <p class="text-xl text-indigo-200 mb-8">{{ $page->excerpt }}</p>
                @endif

                @if ($page->featured_image)
                    <img src="{{ asset('storage/' . $page->featured_image) }}" alt="{{ $page->title }}"
                        class="mx-auto rounded-2xl shadow-2xl mb-8 max-w-2xl w-full">
                @endif

                <div class="prose prose-lg prose-invert max-w-none">
                    {!! $page->body !!}
                </div>
            </div>
        </section>
    @endif
@endsection
