@extends('layout.app')

@section('title', 'Criar nova conta')

@component('components.header')
@endcomponent

@section('content')
    @if ($errors->any())
        <div class="flex w-fulll p-5">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
    @endif
    <div class="grid grid-cols-2 gap-5 h-4/5">
        <img class="w-full h-full object-cover rounded-lg" src="{{ URL('/images/background-animes.png') }}" alt="">
        <div>
            <form action="{{ route('user.store') }}" method="post">
                @csrf
                @component('components.input')
                    @slot('title', 'Nome')
                    @slot('name', 'name')
                    @slot('type', 'text')
                    @slot('value', old('name'))
                @endcomponent

                @component('components.input')
                    @slot('title', 'Email')
                    @slot('name', 'email')
                    @slot('type', 'text')
                    @slot('value', old('email'))
                @endcomponent

                @component('components.input')
                    @slot('title', 'Senha')
                    @slot('name', 'password')
                    @slot('type', 'password')
                    @slot('value', old('password'))
                @endcomponent

                @component('components.button')
                    @slot('name', 'Enviar')
                @endcomponent
            </form>
        </div>
    </div>
@endsection
