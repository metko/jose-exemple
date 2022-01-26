@extends('layouts.app')

@section('title', $page->title)

@section('content')
<div>
    <div class="bg-pink-50 dark:bg-gray-900">
        <div class="container max-w-screen-xl  py-12 mx-auto   items-center">
            <div class="text-4xl font-bold mb-2">{{ $page->title }}</div>
        </div>
    </div>
    <div class="py-10 max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-8">
        {{-- ARTICLE --}}
        @foreach($posts as $post)
            <div class="p-2">
                <a class="relative block"  href="{{ $post->permalink }}">
                    <img src="{{ $post->thumbnail_src('medium') }}" alt="Emoji Support" class="rounded-lg shadow-sm w-full h-52 object-cover">
                    <div class="absolute top-4 right-4 rounded shadow bg-white text-gray-900 dark:bg-gray-900 dark:text-white text-sm px-2 py-0.5">
                       {{ $post->published_at }}
                    </div>
                </a>
        
                <div class="my-2 text-xl font-semibold">{{ $post->title }}</div>
                <a href="{{ $post->author->permalink }}" class="">{{ $post->author->nickname }}</a>
            </div>
        @endforeach
        
    </div>
      
</div>
@endsection