<header class="bg-gradient-to-t from-slate-700 to-slate-800 text-white flex py-5 px-10 justify-between shadow-md">
    <a class="uppercase" href="{{ route('logged.home') }}">Mangabase</a>
    <ul class="flex gap-5">
        <li class="hover:text-slate-400 cursor-pointer transition-all">Início</li>
        <li class="hover:text-slate-400 cursor-pointer transition-all">Categorias <i class="fas fa-chevron-down fa-xs"></i></li>
        <li class="hover:text-slate-400 cursor-pointer transition-all">Usuário</li>
        <li class="hover:text-slate-400 cursor-pointer transition-all"><a href="{{route('user.create')}}">Registrar</a></li>
    </ul>
</header>
