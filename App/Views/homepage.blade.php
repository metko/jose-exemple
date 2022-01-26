@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
{{-- HERO --}}
<section class="bg-pink-50 dark:bg-gray-900">
    <div class="max-w-screen-xl mx-auto py-12 ">
        <div>
            <h1 class="text-4xl font-bold mb-4">Hey! I'm Katheryn Fox</h1>
            <p class="font-light text-lg">26 y/o junior developer who enjoys social card games, blogging and
                painting</p>
        </div>
    </div>
</section>

<div class="w-full min-h-screen py-10">
    {{-- {{ $page->content }} --}}
    <div id="calendar-rxs" class=""></div>
</div>
@endsection