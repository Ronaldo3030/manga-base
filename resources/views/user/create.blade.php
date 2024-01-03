@extends('layout.app')

@section('title', 'Criar nova conta')

@component('components.header')
@endcomponent

@section('content')
    <div class="grid grid-cols-2 gap-5 h-4/5">
        <img class="w-full h-full object-cover rounded-lg" src="{{URL('/images/background-animes.png')}}" alt="">
        <div>
          <div class="flex flex-col">
            <label for="name">Nome</label>
            <input class="border-2 border-black" id="name" name="name" type="text">
          </div>
        </div>
    </div>
@endsection
