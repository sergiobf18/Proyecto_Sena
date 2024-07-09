<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
                
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="url('dashboard/appointment')" :active="request()->routeIs('appointment')" class="text-custom-color">
                        {{ __('Agendamiento') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="url('dashboard/admissionHistory')" :active="request()->routeIs('admissionHistory')" class="text-custom-color">
                        {{ __('HC de ingreso') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="url('dashboard/followUpHistory')" :active="request()->routeIs('followUpHistory')">
                        {{ __('HC de seguimiento') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="url('dashboard/patient')" :active="request()->routeIs('patient')">
                        {{ __('Pacientes') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="url('dashboard/psychologist')" :active="request()->routeIs('psychologist')">
                        <div class="flex items-center">
                            <img src="data:image/png;base64,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" 
                            alt="Psychologist Image" class="mr-2"/> <br>
                            <span>Psychologist</span>
                        </div>
                    </x-nav-link>
                </div>
                
                
                

            </div>
            
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
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
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
