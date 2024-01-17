<header class="bg-gradient-to-t from-slate-700 to-slate-800 text-white flex py-5 px-10 justify-between items-center shadow-md">
    <a class="uppercase font-semibold text-xl" href="{{ route('logged.home') }}">Mangabase</a>
    <ul class="flex items-center justify-center gap-5">
        <li class="hover:text-slate-400 cursor-pointer transition-all">Início</li>
        <li class="hover:text-slate-400 cursor-pointer transition-all" data-dropdown-toggle="dropdown">Categorias <i
                class="fas fa-chevron-down fa-xs"></i></li>

        <div id="dropdown"
            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                @foreach ($categories as $category)
                <li>
                    <a href="{{route('manga.category', $category->id)}}"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{$category->name}}</a>
                </li>
                @endforeach
            </ul>
        </div>

        @auth
        {{-- USUARIO LOGADO --}}
        <li data-dropdown-toggle="dropdownUser" class="hover:text-slate-400 cursor-pointer transition-all flex items-center justify-center gap-1">
            <img class="rounded-full w-12 h-12" src="https://avatars.githubusercontent.com/u/86241807?v=4" alt="image description">
            {{auth()->user()->name}}
            <i class="fas fa-chevron-down fa-xs"></i>
        </li>

        <div id="dropdownUser"
            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                    <a href="{{route('manga.category', $category->id)}}"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        Perfil</a>
                </li>
                @if (auth()->user()->type_user == "admin")
                <li>
                    <a href="{{route('admin.index')}}"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                </li>
                @endif
                <li>
                    <a href="{{route('user.logout')}}"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sair</a>
                </li>
            </ul>
        </div>

        @else
        {{-- USUARIO DESLOGADO --}}
        <li class="hover:text-slate-400 cursor-pointer transition-all">
            <a href="{{route('login.index')}}">
                Logar
            </a>
        </li>
        <li class="hover:text-slate-400 cursor-pointer transition-all"><a href="{{route('user.create')}}">Registrar</a>
        </li>
        @endauth
    </ul>
</header>