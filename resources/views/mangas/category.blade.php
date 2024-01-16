@extends('layout.app')

@section('title', "Categoria - $selectedCategory->name")

@component('components.header')
@endcomponent

@section('content')
<h4 class="uppercase text-center text-sm">Categoria</h4>
<h3 class="text-3xl mb-10 text-center font-semibold">{{$selectedCategory->name}}</h3>
<div class="grid sm:grid-cols-5 grid-cols-3 gap-2">
    @foreach ($mangas as $manga)
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="{{ route('manga.show', $manga->slug) }}">
            <img class="rounded-t-lg" src="{{ $manga->image }}" />
        </a>
        <div class="p-5">
            <a href="{{ route('manga.show', $manga->slug) }}">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $manga->name }}</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                acquisitions of 2021 so far, in reverse chronological order.</p>
            <a href="{{ route('manga.show', $manga->slug) }}"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Detalhes
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    </div>
    @endforeach

</div>
@endsection