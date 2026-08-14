@extends('layouts.app')

@section('title', 'About Us | Pryci.co')

@section('content')

{{-- Page Header --}}
<section class="bg-green-50">

    <div class="mx-auto max-w-7xl px-6 py-20 text-center">

        <span class="font-semibold text-green-600">
            ABOUT PRYCI.CO
        </span>

        <h1 class="mt-3 text-5xl font-bold text-gray-900">
            We're making grocery shopping better.
        </h1>

        <p class="mx-auto mt-5 max-w-2xl text-lg text-gray-600">
            Learn more about our story, our purpose, and the people behind
            Pryci.co.
        </p>

    </div>

</section>


{{-- Company History --}}
<section class="bg-white py-20">

    <div class="mx-auto max-w-7xl px-6">

        <div class="grid items-center gap-12 lg:grid-cols-2">

            <div class="rounded-3xl bg-green-600 p-12 text-white">

                <i data-lucide="history" class="h-16 w-16"></i>

                <h2 class="mt-8 text-4xl font-bold">
                    Our Story
                </h2>

                <p class="mt-5 leading-7 text-green-50">
                    Pryci.co started with a simple idea: grocery shopping
                    should be convenient, reliable, and accessible to everyone.
                </p>

            </div>

            <div>

                <span class="font-semibold text-green-600">
                    COMPANY HISTORY
                </span>

                <h2 class="mt-3 text-3xl font-bold text-gray-900">
                    From a simple idea to a better way to shop.
                </h2>

                <p class="mt-5 leading-7 text-gray-600">
                    Pryci.co was created to help customers save time and enjoy
                    a more convenient way of purchasing everyday essentials.
                </p>

                <p class="mt-4 leading-7 text-gray-600">
                    By combining quality products with an easy-to-use online
                    shopping experience, we continue working toward building
                    a grocery platform customers can rely on.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- Mission & Vision --}}
<section class="bg-gray-50 py-20">

    <div class="mx-auto grid max-w-7xl gap-6 px-6 md:grid-cols-2">

        {{-- Mission --}}
        <div class="rounded-3xl bg-white p-10 shadow-sm">

            <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-green-100">
                <i data-lucide="target" class="h-7 w-7 text-green-600"></i>
            </div>

            <h2 class="mt-6 text-3xl font-bold text-gray-900">
                Our Mission
            </h2>

            <p class="mt-4 leading-7 text-gray-600">
                To provide customers with a convenient, reliable, and
                enjoyable grocery shopping experience while making quality
                products accessible to every household.
            </p>

        </div>

        {{-- Vision --}}
        <div class="rounded-3xl bg-green-600 p-10 text-white">

            <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-white/20">
                <i data-lucide="eye" class="h-7 w-7"></i>
            </div>

            <h2 class="mt-6 text-3xl font-bold">
                Our Vision
            </h2>

            <p class="mt-4 leading-7 text-green-50">
                To become a trusted online grocery destination known for
                quality products, excellent service, and a seamless shopping
                experience.
            </p>

        </div>

    </div>

</section>


{{-- Core Values --}}
<section class="bg-white py-20">

    <div class="mx-auto max-w-7xl px-6">

        <div class="text-center">

            <span class="font-semibold text-green-600">
                WHAT WE BELIEVE IN
            </span>

            <h2 class="mt-3 text-4xl font-bold text-gray-900">
                Our Core Values
            </h2>

        </div>

        @php
            $values = [
                [
                    'icon' => 'heart',
                    'title' => 'Customer First',
                    'description' => 'We prioritize our customers and their experience.'
                ],
                [
                    'icon' => 'shield-check',
                    'title' => 'Trust',
                    'description' => 'We build relationships through honesty and reliability.'
                ],
                [
                    'icon' => 'sparkles',
                    'title' => 'Quality',
                    'description' => 'We strive to provide quality products and services.'
                ],
                [
                    'icon' => 'lightbulb',
                    'title' => 'Innovation',
                    'description' => 'We continuously improve the way people shop.'
                ],
            ];
        @endphp

        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">

            @foreach ($values as $value)

                <div class="rounded-2xl border border-gray-100 p-7 text-center transition hover:border-green-200 hover:shadow-lg">

                    <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-green-100">
                        <i data-lucide="{{ $value['icon'] }}"
                           class="h-7 w-7 text-green-600">
                        </i>
                    </div>

                    <h3 class="mt-5 text-lg font-bold text-gray-900">
                        {{ $value['title'] }}
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-gray-600">
                        {{ $value['description'] }}
                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- Team --}}
<section class="bg-gray-50 py-20">

    <div class="mx-auto max-w-7xl px-6">

        <div class="mx-auto max-w-2xl text-center">

            <span class="font-semibold text-green-600">
                OUR TEAM
            </span>

            <h2 class="mt-3 text-4xl font-bold text-gray-900">
                Meet the People Behind Pryci.co
            </h2>

            <p class="mt-4 text-gray-600">
                A dedicated team working together to make grocery shopping
                simpler.
            </p>

        </div>

        @php
            $team = [
                [
                    'name' => 'Pam',
                    'role' => 'Founder & Owner',
                    'icon' => 'user'
                ],
                [
                    'name' => 'Alex Santos',
                    'role' => 'Operations Manager',
                    'icon' => 'user'
                ],
                [
                    'name' => 'Jamie Cruz',
                    'role' => 'Customer Experience',
                    'icon' => 'user'
                ],
            ];
        @endphp

        <div class="mt-12 grid gap-6 md:grid-cols-3">

            @foreach ($team as $member)

                <div class="rounded-2xl bg-white p-8 text-center shadow-sm">

                    <div class="mx-auto flex h-24 w-24 items-center justify-center rounded-full bg-green-100">
                        <i data-lucide="{{ $member['icon'] }}"
                           class="h-10 w-10 text-green-600">
                        </i>
                    </div>

                    <h3 class="mt-5 text-xl font-bold text-gray-900">
                        {{ $member['name'] }}
                    </h3>

                    <p class="mt-2 text-sm text-green-600">
                        {{ $member['role'] }}
                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>

@endsection
