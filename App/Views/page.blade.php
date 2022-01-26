@extends('layouts.app')

@section('title', 'Page Title')


@section('content')

{{-- BODY --}}
<section class="bg-pink-50 dark:bg-gray-900">
    <div class="max-w-screen-xl mx-auto py-12 ">
        <div>
            <h1 class="text-4xl font-bold mb-4">{{ $page->title }}</h1>
        </div>
        <div>
            {{ $page->content }}
        </div>
    </div>
</section>

<div class="max-w-screen-xl mx-auto py-10">
    {{ $page->content }}
</div>
        
@endsection
