@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <div class="bg-blue-50 dark:bg-gray-900">
        <div class="container max-w-screen-xl  py-12 mx-auto   items-center">
            <div class="text-4xl font-bold mb-2">{{ $post->title }}</div>
        </div>
    </div>
    <div class="max-w-screen-xl mx-auto py-10">
        {{ $post->content }}
    </div>
@endsection