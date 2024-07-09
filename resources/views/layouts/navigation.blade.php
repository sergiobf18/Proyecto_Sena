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
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEXklEQVR4nO2WbUxbZRSAi4maGP9pYvSPiT/84cdiZATWQvlwDJiJWWIgcThglF5YC7QwkwG3dDpM6T7ALIMBiQRiWzYJG8M6cRskZCq9n+0ohRUYsFFgg7YZQmEUlx7zXnahFgrdxMQfO8mTnvec8+bpe3PvbQWC5/F/j3CMeT1VPdT2RcXIpe04UHI7b8fEiQprqrZ9Hsoap0DVNB2UyraHcEgz1rVj4r0F1rRygxuuEnNw1/mYY2rcDW6ib22NON48/d+Kp0adMH+jB5baO8BF9T+9OFZmezUik/woMocNR+zOpj4Ix5gXtxM7HH/Cw98ZWDRehfuDE6GLkwuGXxZilCFWRtyLzzctJDwhLt80Jz5C3hHlkNUCAYQFivXXnUAOLXIwVjfc6h1bWyPwxqmtxSKMOp+o6PXtK+qFRGUvoE9/EgpN3igppebn4xV9n1W0zvnUehdsxemOBTj47Wh3UHFMHmHhJbEyYlN5dB5J8vPvpdpeSiruV6QUD5RtR5Jy8OMgWgiLySPu8oJPlSQkKU0bxOIj1Jj/5ebiOLwQKWF38feEP+hZD3rS1YAwkZReSi+hfJk4DVU1LHxTxUAWTkMmTnGgnlBKLwWK92AUFi8nVhIKTBCICCP+EIQg9gx2WcBr2RzUQzOBYqGExBM3uTqImFyS2FKbeYyRGy+yfy2bLUAYzTDesy5EOaqhnvFHy8qXxxj5jomzS+nvZk2rovoGM/S0m9fEKEc1lKOZrDKm2n9vlIQ8KJaRM7EyyhUnI5yrkM5YGeES5VJbvzjCMeaVrBLme+NF8wovXGRX4dc/XWBXDpeyzREZ5Pu7D1Pv+BMloRujMfIef1MJJfTlaClpj8gh3w2c3ZPNvr3hCxRVMF0eZlX0S6uZA+WoVnSC7kpTD5MqnetBILjONYPrXLPB1v4Unp92ivP7Uv4hFsrZt8oqmb6J39ZPivJSLXsrBmPeTP16mC1vcXtwndOnMriX1S1uT6jgT/Yo66c94kLr/g2nTlcPNB0oZr01dWZAoDy9vL8J9SIOka9lVI7aa28sw7Nw6soC7FNY1WtPRkbFbRWmGbLiDeNTZ9umvYR90XeifsSLQDmqoR6aydKOPNCTAM9CXbcXUo7a8jmpWM58qLs2O4de6D9cmwWtfhIsY49AUzsAmhobl6Ma6qGZps7Zx+d+ffTvxfuPWtNu9nu4n7AzLZPQbZ4H5dk7oNLQHChHtdMXJrkZNKtpm9tZcVPnDLAjS6DVOaC2upejUufgaqjHi+XnHD6V3rVcbnB7QgXXOX3FDfeXPins/3yDeNDhhdK6cThlmITW2pscJ/WTXA31eHFCAe0VSqnOwGc0GFESNjlORiwKMerntbvYX4xAp6tongDFyQEOlKMa30ezexX0sggj2wQhBvoXEycnPCKMXt+T/JV1V67WbiyoGrnEk39m+HJ6uc2GQLl/T6qxXxfnsT3CHLo4VHGkxPSGCKM7nmbP8xDsVPwN6KmT6Wgwa3kAAAAASUVORK5CYII=" 
                            alt="Psychologist Image" class="mr-2"/>
                            <br>
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
