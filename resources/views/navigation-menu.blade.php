<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('member') }}" :active="request()->routeIs('member')">
                        {{ __('Membre') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('skill') }}" :active="request()->routeIs('skill')">
                        {{ __('Competences') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('experience') }}" :active="request()->routeIs('experience')">
                        {{ __('Experience') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('study') }}" :active="request()->routeIs('study')">
                        {{ __('Etudes') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('formation') }}" :active="request()->routeIs('formation')">
                        {{ __('Formation') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('link') }}" :active="request()->routeIs('link')">
                        {{ __('Liens') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('other') }}" :active="request()->routeIs('other')">
                        {{ __('Autres') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('role') }}" :active="request()->routeIs('role')">
                        {{ __('Role') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Authentication -->
            <div class="flex items-center">
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </div>
        </div>
    </div>
</nav>
