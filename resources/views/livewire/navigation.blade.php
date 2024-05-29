<header class="bg-white sticky top-0" style="z-index: 900" x-data="dropdown()">
    <div class="container flex items-center h-20 justify-between md:justify-start">
        <a  :class="{'bg-semilla text-gray-alpine' : open}"
            x-on:click="show()"
            class="flex flex-col items-center justify-center order-last md:order-first px-6 md:px-4 bg-white bg-opacity-25 text-semilla cursor-pointer font-semibold h-full">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <span title="Menú" class="text-sm hidden md:block">Semillas</span>
        </a>
        <a href="/" title="Logotipo Mushugranel" class="mx-6">
            <x-jet-application-mark class="block h-9 w-auto" />
        </a>
        <div title="Buscador" class="flex-1 md:block">
            @livewire('search')
        </div>
        <div class="mx-6 relative hidden md:block">
            @auth
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button title="Perfil de usuario" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="Foto de perfil" />
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-alpine">
                            {{ __('Hola ¡Mushulero!') }}
                        </div>
                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-jet-dropdown-link>
                        <x-jet-dropdown-link href="{{ route('orders.index') }}">
                            Mis ordenes
                        </x-jet-dropdown-link>
                        @role('admin')
                            <x-jet-dropdown-link href="{{ route('admin.index') }}">
                                Administrador
                            </x-jet-dropdown-link>
                        @endrole
                        <div class="border-t border-gray-100"></div>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>
            @else
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <i title="Usuarios" class="fas fa-user-circle text-semilla text-3xl cursor-pointer"></i>
                    </x-slot>
                    <x-slot name="content">
                        <x-jet-dropdown-link href="{{ route('login') }}">
                            {{ __('Login') }}
                        </x-jet-dropdown-link>
                        <x-jet-dropdown-link href="{{ route('register') }}">
                            {{ __('Register') }}
                        </x-jet-dropdown-link>
                    </x-slot>
                </x-jet-dropdown>
            @endauth
        </div>
        <div title="Carrito de compras" class="order-last">
            @livewire('dropdown-cart')
        </div>
    </div>
    <nav id="navigation-menu"
        :class="{'block': open, 'hidden': !open}"
        class="bg-white bg-opacity-25 w-full absolute hidden">
        {{-- Menu computadora --}}
        <div class="container h-full hidden md:block">
            <div
                x-on:click.away="close()"
                class="grid grid-cols-4 h-full relative">
                <ul class="bg-white">
                    @foreach ($categories as $category)
                        <li class="navigation-link text-gray-700 hover:bg-semilla hover:text-brand-an">
                            <a href="{{route('categories.show', $category)}}" class="py-2 px-4 text-sm flex items-center">
                                <span class="flex justify-center w-9">
                                    {!!$category->icon!!}
                                </span>
                                {{$category->name}}
                            </a>
                            <div class="navigation-submenu bg-semilla-e absolute w-3/4 h-full top-0 right-0 hidden">
                                <x-navigation-subcategories :category="$category" />
                            </div>
                        </li>
                    @endforeach
                </ul>
                <div class="col-span-3 bg-gray-100">
                    <x-navigation-subcategories :category="$categories->first()" />
                </div>
            </div>
        </div>
        {{-- menu mobile --}}
        <div class="bg-white h-full mx-6 overflow-y-auto bg-gray-100">
            <ul>
                <br>
                @foreach ($categories as $category)
                    <li class="text-gray-alpine hover:bg-semilla hover:text-white">
                        <a href="{{route('categories.show', $category)}}" class="py-2 px-4 text-sm flex items-center">
                            <span class="flex justify-center w-9">
                                {!!$category->icon!!}
                            </span>
                            {{$category->name}}
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="flex items-center px-4">
                @auth
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="flex-shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif
                    <div>
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>
                <div class="mt-3 space-y-1">
                    <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                        {{ __('Profile') }}
                    </x-jet-responsive-nav-link>
                    <x-jet-responsive-nav-link href="{{ route('orders.index') }}">
                        Mis ordenes
                    </x-jet-responsive-nav-link>
                    @role('admin')
                    <x-jet-responsive-nav-link href="{{ route('admin.index') }}">
                        Administrador
                    </x-jet-responsive-nav-link>
                    @endrole
                    <x-jet-responsive-nav-link href=""
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit() "
                        class="py-2 px-4 text-sm flex items-center text-gray-alpine hover:bg-semilla hover:text-white">
                        Cerrar sesión
                    </x-jet-responsive-nav-link>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                @else
                <div>
                    <p class="py-2 px-4 text-sm mb-4">
                        <a href="{{ route('login') }}">
                            Iniciar sesión
                        </a>
                    </p>
                </div>
                <div>
                    <p class="py-2 px-4 text-sm mb-4">
                        <a href="{{ route('register') }}">
                            Registrate
                        </a>
                    </p>
                </div>
                @endauth
            </div>
        </div>
    </nav>
</header>

