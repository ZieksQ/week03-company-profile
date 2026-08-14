<footer class="bg-gray-950 text-white">

    <div class="mx-auto max-w-7xl px-6 py-14">

        <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4">

            {{-- Company --}}
            <div>
                <div class="mb-4 flex items-center gap-2">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-green-600">
                        <i data-lucide="leaf" class="h-6 w-6"></i>
                    </div>

                    <span class="text-2xl font-bold">
                        Pryci.co
                    </span>
                </div>

                <p class="max-w-sm text-sm leading-6 text-gray-400">
                    Making grocery shopping simple, convenient, and accessible
                    for everyone.
                </p>
            </div>

            {{-- Quick Links --}}
            <div>
                <h3 class="mb-4 font-semibold">Quick Links</h3>

                <ul class="space-y-3 text-sm text-gray-400">
                    <li>
                        <a href="{{ route('home') }}" class="hover:text-green-400">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('about') }}" class="hover:text-green-400">
                            About Us
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('services') }}" class="hover:text-green-400">
                            Services
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('contact') }}" class="hover:text-green-400">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Services --}}
            <div>
                <h3 class="mb-4 font-semibold">Services</h3>

                <ul class="space-y-3 text-sm text-gray-400">
                    <li>Fresh Grocery Delivery</li>
                    <li>Online Shopping</li>
                    <li>Fresh Produce</li>
                    <li>Daily Essentials</li>
                    <li>Local Products</li>
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h3 class="mb-4 font-semibold">Contact Us</h3>

                <ul class="space-y-4 text-sm text-gray-400">

                    <li class="flex gap-3">
                        <i data-lucide="map-pin" class="h-5 w-5 shrink-0 text-green-500"></i>
                        <span>
                            123 Green Street,<br>
                            Manila, Philippines
                        </span>
                    </li>

                    <li class="flex items-center gap-3">
                        <i data-lucide="mail" class="h-5 w-5 text-green-500"></i>
                        <span>hello@pryci.co</span>
                    </li>

                    <li class="flex items-center gap-3">
                        <i data-lucide="phone" class="h-5 w-5 text-green-500"></i>
                        <span>+63 912 345 6789</span>
                    </li>

                </ul>
            </div>

        </div>

        <div class="mt-12 border-t border-gray-800 pt-6 text-center text-sm text-gray-500">
            © {{ date('Y') }} Pryci.co. All rights reserved.
        </div>

    </div>

</footer>
