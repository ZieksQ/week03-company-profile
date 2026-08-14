<nav class="sticky top-0 z-50 w-full border-b border-gray-100 bg-white/95 backdrop-blur">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center gap-2">
            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-green-600">
                <i data-lucide="leaf" class="h-6 w-6 text-white"></i>
            </div>

            <span class="text-2xl font-bold text-green-700">
                Pryci<span class="text-gray-800">.co</span>
            </span>
        </a>

        {{-- Desktop Navigation --}}
        <div class="hidden items-center gap-8 md:flex">

            <a href="{{ route('home') }}"
               class="font-medium transition hover:text-green-600
               {{ request()->routeIs('home') ? 'text-green-600' : 'text-gray-700' }}">
                Home
            </a>

            <a href="{{ route('about') }}"
               class="font-medium transition hover:text-green-600
               {{ request()->routeIs('about') ? 'text-green-600' : 'text-gray-700' }}">
                About
            </a>

            <a href="{{ route('services') }}"
               class="font-medium transition hover:text-green-600
               {{ request()->routeIs('services') ? 'text-green-600' : 'text-gray-700' }}">
                Services
            </a>

            <a href="{{ route('contact') }}"
               class="font-medium transition hover:text-green-600
               {{ request()->routeIs('contact') ? 'text-green-600' : 'text-gray-700' }}">
                Contact
            </a>

        </div>

        {{-- CTA --}}
        <a href="{{ route('contact') }}"
           class="hidden rounded-full bg-green-600 px-5 py-2.5 font-semibold text-white transition hover:bg-green-700 md:block">
            Get Started
        </a>

        {{-- Mobile Menu Button --}}
        <button class="rounded-lg p-2 text-gray-700 md:hidden">
            <i data-lucide="menu" class="h-6 w-6"></i>
        </button>

    </div>
</nav>
