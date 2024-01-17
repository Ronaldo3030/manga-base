@extends('layout.app')

@section('title', "Manga - $manga->name")

@component('components.header')
@endcomponent

@section('content')
<a href="{{ url()->previous() }}"
    class="mb-3 text-white bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:outline-none transition-all focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M13 5H1m0 0 4 4M1 5l4-4" />
    </svg>

    <span class="sr-only">Voltar para página anterior</span>
</a>



<div class="grid grid-cols-2 gap-5">
    <img class="rounded-lg" src="{{ $manga->image }}" alt="Image {{ $manga->name }}">
    <div>
        <h2 class="uppercase">{{ $manga->name }}</h2>
        <p>Categoria: {{ $manga->category->name }}</p>
        <p>Ranking: {{ $manga->rank }}</p>
        <p>{{ $manga->description }}</p>

        <div>
            <h3 class="my-5">Comentários</h3>
            <div class="flex flex-col gap-3">
                @foreach ($comments as $comment)
                @component('components.cardComment')
                @slot('src')
                {{ $comment->user->image }}
                @endslot
                @slot('userName')
                {{ $comment->user->name }}
                @endslot
                @slot('comment')
                {{ $comment->comment }}
                @endslot
                @endcomponent
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection