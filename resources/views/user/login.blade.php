@extends('layout.app')

@section('title', 'Entrar')

@component('components.header')
@endcomponent

@section('content')
    

    
    <div class="grid grid-cols-2 gap-5 h-4/5">
        <img class="w-full h-full object-cover rounded-lg" src="{{ URL('/images/background-animes.png') }}" alt="">
        <div>
            @if ($errors->any())
                <div class="w-full bg-red-500 px-5 py-2 rounded-md mb-3">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-lg text-white">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('erro'))
                <div class="w-full bg-red-500 px-5 py-2 rounded-md mb-3">
                    <ul>
                        <li class="text-lg text-white">{{ session('erro') }}</li>
                    </ul>
                </div>
            @endif
            @if (session('success'))
                <div class="w-full bg-green-500 px-5 py-2 rounded-md mb-3">
                    <ul>
                        <li class="text-lg text-white">{{ session('success') }}</li>
                    </ul>
                </div>
            @endif

            <form action="{{ route('login.auth') }}" method="post">
                @csrf
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
