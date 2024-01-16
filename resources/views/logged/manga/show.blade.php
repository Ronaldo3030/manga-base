@extends('layout.app')

@section('title', "Manga - $manga->name")

@component('components.header')
@endcomponent

@section('content')
    <a href="{{ url()->previous() }}">Voltar</a>
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
