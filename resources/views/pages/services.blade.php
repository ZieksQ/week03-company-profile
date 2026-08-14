@extends('layouts.app')

@section('title', 'Services | Pryci.co')

@section('content')

{{-- Header --}}
<section class="bg-green-50">

    <div class="mx-auto max-w-7xl px-6 py-20 text-center">

        <span class="font-semibold text-green-600">
            OUR SERVICES
        </span>

        <h1 class="mt-3 text-5xl font-bold text-gray-900">
            Everything you need,
            <span class="text-green-600">in one place.</span>
        </h1>

        <p class="mx-auto mt-5 max-w-2xl text-lg text-gray-600">
            Pryci.co provides convenient grocery services designed to make
            your everyday shopping easier.
        </p>

    </div>

</section>


{{-- Services --}}
<section class="bg-white py-20">

    <div class="mx-auto max-w-7xl px-6">

        @php
            $services = [
                [
                    'icon' => 'shopping-cart',
                    'title' => 'Online Grocery Shopping',
                    'description' => 'Browse our selection of groceries and everyday essentials from the comfort of your home.'
                ],
                [
                    'icon' => 'truck',
                    'title' => 'Fast Delivery',
                    'description' => 'Have your groceries delivered conveniently and reliably straight to your doorstep.'
                ],
                [
                    'icon' => 'leaf',
                    'title' => 'Fresh Produce',
                    'description' => 'Choose from fresh fruits, vegetables, and other quality products for your household.'
                ],
                [
                    'icon' => 'package',
                    'title' => 'Daily Essentials',
                    'description' => 'Find household items and everyday necessities in one convenient online store.'
                ],
                [
                    'icon' => 'store',
                    'title' => 'Local Products',
                    'description' => 'Discover products from local suppliers and businesses through our platform.'
                ],
                [
                    'icon' => 'headphones',
                    'title' => 'Customer Support',
                    'description' => 'Our team is ready to assist you with your orders, questions, and shopping needs.'
                ],
            ];
        @endphp

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">

            @foreach ($services as $service)

                <div class="group rounded-3xl border border-gray-100 bg-white p-8 shadow-sm transition duration-300 hover:-translate-y-2 hover:border-green-200 hover:shadow-xl">

                    {{-- Icon --}}
                    <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-green-100 transition group-hover:bg-green-600">

                        <i data-lucide="{{ $service['icon'] }}"
                           class="h-8 w-8 text-green-600 group-hover:text-white">
                        </i>

                    </div>

                    {{-- Title --}}
                    <h2 class="mt-7 text-2xl font-bold text-gray-900">
                        {{ $service['title'] }}
                    </h2>

                    {{-- Description --}}
                    <p class="mt-4 leading-7 text-gray-600">
                        {{ $service['description'] }}
                    </p>

                    <a href="{{ route('contact') }}"
                       class="mt-6 inline-flex items-center gap-2 font-semibold text-green-600 hover:text-green-700">

                        Learn More

                        <i data-lucide="arrow-right" class="h-4 w-4"></i>

                    </a>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- CTA --}}
<section class="bg-green-600">

    <div class="mx-auto max-w-7xl px-6 py-16 text-center">

        <h2 class="text-4xl font-bold text-white">
            Need help with your grocery shopping?
        </h2>

        <p class="mx-auto mt-4 max-w-xl text-green-100">
            Get in touch with our team and we'll be happy to assist you.
        </p>

        <a href="{{ route('contact') }}"
           class="mt-8 inline-flex items-center gap-2 rounded-full bg-white px-7 py-3.5 font-semibold text-green-700 hover:bg-green-50">

            Contact Us

            <i data-lucide="arrow-right" class="h-5 w-5"></i>

        </a>

    </div>

</section>

@endsection
