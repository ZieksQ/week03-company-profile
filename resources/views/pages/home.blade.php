@extends('layouts.app')

@section('title', 'Pryci.co | Fresh Groceries Delivered')

@section('content')

{{-- Hero Section --}}
<section class="overflow-hidden bg-green-50">

    <div class="mx-auto grid max-w-7xl items-center gap-12 px-6 py-20 lg:grid-cols-2 lg:py-28">

        {{-- Hero Text --}}
        <div>

            <span class="inline-flex items-center gap-2 rounded-full bg-green-100 px-4 py-2 text-sm font-semibold text-green-700">
                <i data-lucide="sparkles" class="h-4 w-4"></i>
                Fresh. Simple. Convenient.
            </span>

            <h1 class="mt-6 text-5xl font-extrabold leading-tight tracking-tight text-gray-900 md:text-6xl">
                Fresh groceries,
                <span class="text-green-600">delivered to you.</span>
            </h1>

            <p class="mt-6 max-w-xl text-lg leading-8 text-gray-600">
                Shop fresh produce, daily essentials, and quality products
                from the comfort of your home with Pryci.co.
            </p>

            <div class="mt-8 flex flex-col gap-4 sm:flex-row">

                <a href="{{ route('services') }}"
                   class="inline-flex items-center justify-center gap-2 rounded-full bg-green-600 px-7 py-3.5 font-semibold text-white transition hover:bg-green-700">
                    Explore Services
                    <i data-lucide="arrow-right" class="h-5 w-5"></i>
                </a>

                <a href="{{ route('about') }}"
                   class="inline-flex items-center justify-center rounded-full border border-gray-300 bg-white px-7 py-3.5 font-semibold text-gray-700 transition hover:border-green-500 hover:text-green-600">
                    Learn More
                </a>

            </div>

            {{-- Small stats --}}
            <div class="mt-10 flex gap-8 border-t border-green-200 pt-8">

                <div>
                    <p class="text-2xl font-bold text-gray-900">5K+</p>
                    <p class="text-sm text-gray-500">Happy Customers</p>
                </div>

                <div>
                    <p class="text-2xl font-bold text-gray-900">500+</p>
                    <p class="text-sm text-gray-500">Products</p>
                </div>

                <div>
                    <p class="text-2xl font-bold text-gray-900">24/7</p>
                    <p class="text-sm text-gray-500">Online Shopping</p>
                </div>

            </div>

        </div>

        {{-- Hero Product Card --}}
        <div class="relative">

            <div class="rounded-3xl bg-white p-6 shadow-2xl">

                <div class="mb-5 flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Featured Product</p>
                        <h3 class="text-xl font-bold text-gray-900">
                            Fresh Organic Basket
                        </h3>
                    </div>

                    <span class="rounded-full bg-green-100 px-3 py-1 text-sm font-semibold text-green-700">
                        Fresh
                    </span>
                </div>

                <div class="flex h-72 items-center justify-center rounded-2xl bg-green-50">
                    <div class="text-center">
                        <i data-lucide="shopping-basket"
                           class="mx-auto h-28 w-28 text-green-600">
                        </i>

                        <p class="mt-4 font-medium text-green-800">
                            Fresh groceries
                        </p>
                    </div>
                </div>

                <div class="mt-5 flex items-center justify-between">

                    <div>
                        <p class="text-sm text-gray-500">Starting from</p>
                        <p class="text-2xl font-bold text-gray-900">
                            ₱499
                        </p>
                    </div>

                    <button class="flex items-center gap-2 rounded-full bg-green-600 px-5 py-3 font-semibold text-white hover:bg-green-700">
                        <i data-lucide="shopping-cart" class="h-5 w-5"></i>
                        Shop Now
                    </button>

                </div>

            </div>

            {{-- Decoration --}}
            <div class="absolute -bottom-8 -left-8 -z-10 h-32 w-32 rounded-full bg-green-200"></div>
            <div class="absolute -right-8 -top-8 -z-10 h-32 w-32 rounded-full bg-yellow-200"></div>

        </div>

    </div>

</section>


{{-- Company Introduction --}}
<section class="bg-white py-20">

    <div class="mx-auto max-w-7xl px-6">

        <div class="grid items-center gap-12 lg:grid-cols-2">

            <div class="rounded-3xl bg-green-100 p-12">

                <div class="flex h-20 w-20 items-center justify-center rounded-2xl bg-green-600">
                    <i data-lucide="store" class="h-10 w-10 text-white"></i>
                </div>

                <h3 class="mt-8 text-3xl font-bold text-gray-900">
                    Your neighborhood grocery,
                    now online.
                </h3>

                <p class="mt-5 leading-7 text-gray-600">
                    Pryci.co brings your everyday grocery needs into one
                    convenient online platform. We make it easier to discover,
                    choose, and receive quality products without leaving home.
                </p>

            </div>

            <div>

                <span class="font-semibold text-green-600">
                    ABOUT PRYCI.CO
                </span>

                <h2 class="mt-3 text-4xl font-bold text-gray-900">
                    We make everyday shopping easier.
                </h2>

                <p class="mt-6 leading-7 text-gray-600">
                    From fresh fruits and vegetables to household essentials,
                    Pryci.co is committed to providing customers with a
                    convenient and reliable grocery shopping experience.
                </p>

                <p class="mt-4 leading-7 text-gray-600">
                    Our goal is simple: make quality products accessible,
                    affordable, and easy to order.
                </p>

                <a href="{{ route('about') }}"
                   class="mt-7 inline-flex items-center gap-2 font-semibold text-green-600 hover:text-green-700">
                    Learn more about us
                    <i data-lucide="arrow-right" class="h-5 w-5"></i>
                </a>

            </div>

        </div>

    </div>

</section>


{{-- Featured Services --}}
<section class="bg-gray-50 py-20">

    <div class="mx-auto max-w-7xl px-6">

        <div class="mx-auto max-w-2xl text-center">

            <span class="font-semibold text-green-600">
                WHAT WE OFFER
            </span>

            <h2 class="mt-3 text-4xl font-bold text-gray-900">
                Our Featured Services
            </h2>

            <p class="mt-4 text-gray-600">
                Everything you need for a simple and convenient grocery
                shopping experience.
            </p>

        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

            @php
                $featuredServices = [
                    [
                        'icon' => 'shopping-cart',
                        'title' => 'Online Grocery Shopping',
                        'description' => 'Browse and order your favorite groceries online.'
                    ],
                    [
                        'icon' => 'truck',
                        'title' => 'Fast Delivery',
                        'description' => 'Get your groceries delivered directly to your doorstep.'
                    ],
                    [
                        'icon' => 'leaf',
                        'title' => 'Fresh Products',
                        'description' => 'Shop fresh and quality products for your everyday needs.'
                    ],
                ];
            @endphp

            @foreach ($featuredServices as $service)

                <div class="rounded-2xl bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">

                    <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-green-100">
                        <i data-lucide="{{ $service['icon'] }}"
                           class="h-7 w-7 text-green-600">
                        </i>
                    </div>

                    <h3 class="mt-5 text-xl font-bold text-gray-900">
                        {{ $service['title'] }}
                    </h3>

                    <p class="mt-3 leading-6 text-gray-600">
                        {{ $service['description'] }}
                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- CTA --}}
<section class="bg-green-600">

    <div class="mx-auto max-w-7xl px-6 py-16">

        <div class="flex flex-col items-center justify-between gap-8 text-center md:flex-row md:text-left">

            <div>
                <h2 class="text-3xl font-bold text-white">
                    Ready to make grocery shopping easier?
                </h2>

                <p class="mt-2 text-green-100">
                    Get in touch with Pryci.co today.
                </p>
            </div>

            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 rounded-full bg-white px-7 py-3.5 font-semibold text-green-700 transition hover:bg-green-50">
                Contact Us
                <i data-lucide="arrow-right" class="h-5 w-5"></i>
            </a>

        </div>

    </div>

</section>

@endsection
