<nav x-data="{ open: false }">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center justify-between w-full">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a>
                        <x-telehemp-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <div class="hidden lg:flex navigation-links items-center">
                    <!-- Navigation Links -->
                    <div class=" space-x-8 sm:-my-px sm:ml-4 xl:flex">
                        <x-nav-link href="{{ url('home#quem-somos')}}"  :active="request()->routeIs('dashboard')" class="text-white hover:text-white">
                           Sobre Nós
                        </x-nav-link>
                    </div>

                    <!-- <div class=" space-x-8 sm:-my-px sm:ml-4 xl:flex">
                        <x-nav-link href="{{ url('home#funcionalidades')}}" :active="request()->routeIs('dashboard')" class="text-white hover:text-white">
                            Funcionalidades
                        </x-nav-link>
                    </div> -->

                    <div class=" space-x-8 sm:-my-px sm:ml-4 xl:flex">
                        <a href="{{ url('especialistas')}}" :active="request()->routeIs('dashboard')" class="w-46 text-white hover:text-white">
                            Especialistas
                        </a>
                    </div>

                    <div class=" sm:-my-px sm:ml-4 xl:flex relative rounded-3xl">
                        <a href="{{ url('faq')}}" :active="request()->routeIs('dashboard')" class="text-white hover:text-white">
                            FAQ
                        </a>
                    </div>

                    <div class=" sm:-my-px sm:ml-4 xl:flex relative rounded-3xl">
                        <a href="{{ url('pergunte-aos-especialistas')}}" :active="request()->routeIs('dashboard')" class="text-center inline-flex items-center justify-center p-2 py-2 text-sm font-medium leading-5 text-white border border-white rounded bg-transparent hover:bg-white hover:text-blueth focus:outline-none focus:border-indigo-700 transition w-42  duration-150 ease-in-out">
                            Pergunte aos Especialistas
                        </a>
                    </div>

                    <div class=" sm:-my-px sm:ml-4 xl:flex relative rounded-3xl">
                        <a href="https://api.whatsapp.com/send/?phone=%2B55554598054742&text=Ol%C3%A1%21+Tenho+interesse+em+fazer+parte+da+equipe+de+profissionais+TeleHemp%2C+poderia+me+auxiliar%3F&type=phone_number&app_absent=0 " :active="request()->routeIs('dashboard')" class="text-center inline-flex items-center justify-center p-2 py-2 text-sm font-medium leading-5 text-white border border-white rounded bg-transparent hover:bg-white hover:text-blueth focus:outline-none focus:border-indigo-700 transition w-42  duration-150 ease-in-out">
                            Para Especialistas
                        </a>
                    </div>
 
                    <div class=" sm:-my-px sm:ml-4 xl:flex relative rounded-3xl">
                        <a href="https://telehemp.vsaudeapp.com.br/schedule" :active="request()->routeIs('dashboard')" class="w-42  text-center inline-flex items-center justify-center p-2 py-2 text-sm font-medium leading-5 text-white border border-white rounded bg-transparent hover:bg-white hover:text-blueth focus:outline-none focus:border-indigo-700 transition w-42  duration-150 ease-in-out">
                            Para Pacientes
                        </a>
                    </div>

                    <!-- <div class=" sm:-my-px sm:ml-4 xl:flex relative rounded"
                         x-data="{ showSubmenu: false }">
                        <a href="https://api.whatsapp.com/send/?phone=%2B55554598054742&text=Ol%C3%A1%21+Tenho+interesse+em+fazer+parte+da+equipe+de+profissionais+TeleHemp%2C+poderia+me+auxiliar%3F&type=phone_number&app_absent=0" x-on:click.prevent="showSubmenu = !showSubmenu"
                           class="inline-flex justify-center px-7 py-2 text-sm font-medium leading-5 text-blueth rounded bg-white focus:outline-none focus:border-indigo-700 transition w-42 duration-150 ease-in-out">
                            Inscreva-se
    {{--                    active="request()->routeIs('dashboard')"--}}
                        </a>


                        <div x-show="showSubmenu" class="justify-center absolute top-[50px] left-0 m-0 p-0 w-max">
                            <div class="space-y-4 flex flex-col items-center text-center min-w-[103px]">
                                <a class="text-sm rounded-xl border-[1px] w-full uppercase px-2 py-1 tracking-widest text-white hover:text-blueth hover:bg-white border-white hover:border-blueth" href="https://telehemp.vsaudeapp.com.br/schedule">
                                    Paciente
                                </a>

                                <a class="text-sm rounded-xl border-[1px] w-full uppercase px-2 py-1 tracking-widest text-white hover:text-blueth hover:bg-white border-white hover:border-blueth" href="https://api.whatsapp.com/send/?phone=%2B55554598054742&text=Ol%C3%A1%21+Tenho+interesse+em+fazer+parte+da+equipe+de+profissionais+TeleHemp%2C+poderia+me+auxiliar%3F&type=phone_number&app_absent=0 ">
                                    Profissional<br /> da Saúde
                                </a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>

            <!-- Settings Dropdown -->
            <!-- <div class="hidden lg:flex sm:items-center sm:ml-6">
                @if (Auth::check())
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Perfil') }}
                            </x-dropdown-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Sair') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @endif
            </div> -->

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center lg:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden lg:hidden">
        <div class="pt-2 pb-3 space-y-2">
            <x-responsive-nav-link href="{{url('home#quem-somos') }}" x-on:click="open = !open" :active="request()->routeIs('dashboard')">
                Sobre Nós
            </x-responsive-nav-link>

            <!-- <x-responsive-nav-link href="{{url('home#funcionalidades') }}" x-on:click="open = !open"  :active="request()->routeIs('dashboard')">
                Funcionalidades
            </x-responsive-nav-link> -->

            <x-responsive-nav-link href="{{url('especialistas') }}" x-on:click="open = !open"  :active="request()->routeIs('dashboard')">
                Especialistas
            </x-responsive-nav-link>

            <x-responsive-nav-link href="{{ url('faq')}}" x-on:click="open = !open"  :active="request()->routeIs('dashboard')">
                FAQ
            </x-responsive-nav-link>

            <x-responsive-nav-link href="{{ url('pergunte-aos-especialistas')}}" x-on:click="open = !open"  :active="request()->routeIs('dashboard')">
                Pergunte aos Especialistas
            </x-responsive-nav-link>

            <x-responsive-nav-link href="https://api.whatsapp.com/send/?phone=%2B55554598054742&text=Ol%C3%A1%21+Tenho+interesse+em+fazer+parte+da+equipe+de+profissionais+TeleHemp%2C+poderia+me+auxiliar%3F&type=phone_number&app_absent=0 " x-on:click="open = !open"  :active="request()->routeIs('dashboard')">
               Para Especialistas
            </x-responsive-nav-link>

            <x-responsive-nav-link href="https://telehemp.vsaudeapp.com.br/schedule" x-on:click="open = !open"  :active="request()->routeIs('dashboard')">
                Para Pacientes
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            @if (Auth::check())
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Perfil') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Sair') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            @endif
        </div>
    </div>
</nav>
