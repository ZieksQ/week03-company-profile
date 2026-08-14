@extends('layouts.app')

@section('title', 'Contact Us | Pryci.co')

@section('content')

{{-- Header --}}
<section class="bg-green-50">

    <div class="mx-auto max-w-7xl px-6 py-20 text-center">

        <span class="font-semibold text-green-600">
            CONTACT US
        </span>

        <h1 class="mt-3 text-5xl font-bold text-gray-900">
            We'd love to hear from you.
        </h1>

        <p class="mx-auto mt-5 max-w-2xl text-lg text-gray-600">
            Have a question or need assistance? Send us a message and
            our team will get back to you.
        </p>

    </div>

</section>


{{-- Contact Section --}}
<section class="bg-white py-20">

    <div class="mx-auto grid max-w-7xl gap-12 px-6 lg:grid-cols-2">

        {{-- Contact Form --}}
        <div>

            <h2 class="text-3xl font-bold text-gray-900">
                Send us a message
            </h2>

            <p class="mt-3 text-gray-600">
                Fill out the form below. This form is currently for UI
                demonstration purposes.
            </p>

            <form class="mt-8 space-y-6">

                {{-- Name --}}
                <div>

                    <label for="name"
                           class="mb-2 block text-sm font-semibold text-gray-700">
                        Full Name
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Enter your name"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 outline-none transition focus:border-green-500 focus:ring-2 focus:ring-green-100"
                    >

                </div>

                {{-- Email --}}
                <div>

                    <label for="email"
                           class="mb-2 block text-sm font-semibold text-gray-700">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="you@example.com"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 outline-none transition focus:border-green-500 focus:ring-2 focus:ring-green-100"
                    >

                </div>

                {{-- Subject --}}
                <div>

                    <label for="subject"
                           class="mb-2 block text-sm font-semibold text-gray-700">
                        Subject
                    </label>

                    <input
                        type="text"
                        id="subject"
                        name="subject"
                        placeholder="How can we help?"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 outline-none transition focus:border-green-500 focus:ring-2 focus:ring-green-100"
                    >

                </div>

                {{-- Message --}}
                <div>

                    <label for="message"
                           class="mb-2 block text-sm font-semibold text-gray-700">
                        Message
                    </label>

                    <textarea
                        id="message"
                        name="message"
                        rows="5"
                        placeholder="Write your message..."
                        class="w-full resize-none rounded-xl border border-gray-300 px-4 py-3 outline-none transition focus:border-green-500 focus:ring-2 focus:ring-green-100"
                    ></textarea>

                </div>

                {{-- Button --}}
                <button
                    type="button"
                    class="flex w-full items-center justify-center gap-2 rounded-xl bg-green-600 px-6 py-3.5 font-semibold text-white transition hover:bg-green-700"
                >
                    Send Message
                    <i data-lucide="send" class="h-5 w-5"></i>
                </button>

            </form>

        </div>


        {{-- Contact Information --}}
        <div>

            <div class="rounded-3xl bg-green-600 p-8 text-white">

                <h2 class="text-3xl font-bold">
                    Get in touch
                </h2>

                <p class="mt-3 text-green-100">
                    You can also reach us through the following contact
                    information.
                </p>


                {{-- Address --}}
                <div class="mt-8 flex gap-4">

                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-white/10">
                        <i data-lucide="map-pin" class="h-6 w-6"></i>
                    </div>

                    <div>
                        <h3 class="font-semibold">
                            Address
                        </h3>

                        <p class="mt-1 text-sm leading-6 text-green-100">
                            123 Green Street,<br>
                            Manila, Philippines
                        </p>
                    </div>

                </div>


                {{-- Email --}}
                <div class="mt-6 flex gap-4">

                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-white/10">
                        <i data-lucide="mail" class="h-6 w-6"></i>
                    </div>

                    <div>
                        <h3 class="font-semibold">
                            Email
                        </h3>

                        <p class="mt-1 text-sm text-green-100">
                            hello@pryci.co
                        </p>
                    </div>

                </div>


                {{-- Phone --}}
                <div class="mt-6 flex gap-4">

                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-white/10">
                        <i data-lucide="phone" class="h-6 w-6"></i>
                    </div>

                    <div>
                        <h3 class="font-semibold">
                            Phone
                        </h3>

                        <p class="mt-1 text-sm text-green-100">
                            +63 912 345 6789
                        </p>
                    </div>

                </div>


                {{-- Social Media --}}
                <div class="mt-8 border-t border-white/20 pt-8">

                    <h3 class="font-semibold">
                        Follow us
                    </h3>

                    <div class="mt-4 flex gap-3">

                        <a href="#"
                           class="flex h-10 w-10 items-center justify-center rounded-full bg-white/10 transition hover:bg-white/20">
                            <i data-lucide="facebook" class="h-5 w-5"></i>
                        </a>

                        <a href="#"
                           class="flex h-10 w-10 items-center justify-center rounded-full bg-white/10 transition hover:bg-white/20">
                            <i data-lucide="instagram" class="h-5 w-5"></i>
                        </a>

                        <a href="#"
                           class="flex h-10 w-10 items-center justify-center rounded-full bg-white/10 transition hover:bg-white/20">
                            <i data-lucide="twitter" class="h-5 w-5"></i>
                        </a>

                    </div>

                </div>

            </div>


            {{-- Google Map --}}
            <div class="mt-6 overflow-hidden rounded-3xl border border-gray-200">

                <iframe
                    src="https://www.google.com/maps?q=Manila,Philippines&output=embed"
                    class="h-80 w-full border-0"
                    loading="lazy">
                </iframe>

            </div>

        </div>

    </div>

</section>

@endsection
