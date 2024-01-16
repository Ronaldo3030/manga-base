<header class="bg-gradient-to-t from-slate-700 to-slate-800 text-white flex py-5 px-10 justify-between shadow-md">
    <a class="uppercase font-semi-bold text-xl" href="{{ route('logged.home') }}">Mangabase</a>
    <ul class="flex gap-5">
        <li class="hover:text-slate-400 cursor-pointer transition-all">Início</li>
        <li class="hover:text-slate-400 cursor-pointer transition-all" data-dropdown-toggle="dropdown">Categorias <i
                class="fas fa-chevron-down fa-xs"></i></li>

        <div id="dropdown"
            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                        out</a>
                </li>
            </ul>
        </div>

        @auth
        <li class="hover:text-slate-400 cursor-pointer transition-all">{{auth()->user()->name}}</li>
        <li>
            <a href="{{route('user.logout')}}">Sair</a>
        </li>
        @else
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