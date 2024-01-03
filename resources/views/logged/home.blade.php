@extends('layout.app')

@section('title', 'Início')

@component('components.header')
@endcomponent

@section('content')
    <div class="grid sm:grid-cols-5 grid-cols-3 gap-2">
        @foreach ($mangas as $manga)
            <div class="border-solid border-2 border-red-600 cursor-pointer shadow-md hover:scale-105 transition-all">
                <img class="w-full h-40 object-cover" src="{{ $manga->image }}" alt="">
                <p class="text-center p-1">{{ $manga->name }}</p>
            </div>
        @endforeach
    </div>
@endsection
