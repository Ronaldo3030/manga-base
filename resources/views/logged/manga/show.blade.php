@extends('layout.app')

@section('title', $manga->name)

@component('components.header')
@endcomponent

@section('content')
    <a href="{{ route('logged.home') }}">Voltar</a>
    <div class="grid grid-cols-2 gap-5">
        <img src="{{ $manga->image }}" alt="Image {{ $manga->name }}">
        <div>
            <h2 class="uppercase">{{ $manga->name }}</h2>
            <p>Ranking: {{ $manga->rank }}</p>
            <p>{{ $manga->description }}</p>
        </div>
    </div>
@endsection
