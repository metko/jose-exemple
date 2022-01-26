@extends('layouts.app')

@section('title', $post->title)

@section('content')
   
    <div class="bg-pink-50 dark:bg-gray-900">
        <div class="container max-w-screen-xl  py-12 mx-auto   items-center">
            <div class="text-4xl font-bold mb-2">{{ $post->title }}</div>
            <div class="w-full rounded h-52 overflow-hidden">
                <img src="{{ $post->thumbnail_src('jose_full') }}" class="rounded-lg shadow-sm w-full h-52 object-cover">
            </div>
            <a href="{{ $post->author->permalink }}">{{ $post->author->nickname }}</a> - {{ $post->full_date }}
        </div>
    </div>
    <div class="max-w-screen-xl mx-auto py-10">
        {{ $post->content }}
    </div>
@endsection