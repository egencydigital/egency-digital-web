<!-- ================= HEADER ================= -->
<style>
    .bg_nav.scrolled {
        background: white;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    }

    .bg_nav.scrolled nav {
        color: #111827;
        /* gray-900 */
    }

    .bg_nav.scrolled span {
        color: #111827;
    }
</style>
<header class="fixed top-0 left-0 w-full z-50 bg-transparent transition-all duration-300 bg_nav">

    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between h-20">

            <!-- ===== LOGO ===== -->
            <div class="group flex items-center cursor-pointer">

                <div
                    class="w-10 h-10 bg-[#E50913] rounded-md flex items-center justify-center
                    text-white font-bold text-xl transition-all duration-300
                    group-hover:scale-0 group-hover:opacity-0">
                    Q
                </div>

                <a href="{{ url('/') }}">
                    <span
                        class="font-semibold text-lg tracking-tight text-white
                        opacity-0 -translate-x-3 transition-all duration-300
                        group-hover:opacity-100 group-hover:translate-x-0">
                        Egency Digital
                    </span>
                </a>
            </div>

            <!-- ===== DESKTOP NAV ===== -->
            <div x-data="{ activeMega: null }" class="relative">

                <nav class="hidden lg:flex items-center gap-6 text-sm font-medium text-white">

                    <!-- WHAT WE DO -->
                    <div class="relative" @mouseenter="activeMega = 'industries'" @mouseleave="activeMega = null">

                        <button class="flex items-center gap-1 hover:text-[#E50913] transition-colors duration-300">
                            WHAT WE DO

                            <!-- Arrow -->
                            <svg class="w-4 h-4 transition-transform duration-300"
                                :class="{ 'rotate-90': activeMega === 'industries' }" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </button>

                        <!-- Mega Menu -->
                        <div x-show="activeMega === 'industries'" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-y-4"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-200"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-4"
                            class="fixed left-0 top-20 w-full bg-white text-gray-900 border-t border-gray-200 shadow-xl z-50">

                            <div class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-2 gap-16">

                                <div>
                                    <h2 class="text-3xl font-semibold mb-6">Industries</h2>
                                    <ul class="space-y-4 text-lg">
                                        <li><a href="#" class="hover:text-[#E50913] transition">Travel &
                                                Hospitality</a></li>
                                        <li><a href="#"
                                                class="hover:text-[#E50913] transition">Telecommunication</a></li>
                                        <li><a href="#" class="hover:text-[#E50913] transition">Oil, Gas &
                                                Energy</a></li>
                                        <li><a href="#" class="hover:text-[#E50913] transition">E-commerce</a>
                                        </li>
                                        <li><a href="#" class="hover:text-[#E50913] transition">Healthcare</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="md:mt-14">
                                    <ul class="space-y-4 text-lg">
                                        <li><a href="#" class="hover:text-[#E50913] transition">Public Sector</a>
                                        </li>
                                        <li><a href="#" class="hover:text-[#E50913] transition">Retail & CPG</a>
                                        </li>
                                        <li><a href="#" class="hover:text-[#E50913] transition">Startups</a></li>
                                        <li><a href="#" class="hover:text-[#E50913] transition">Banking &
                                                Fintech</a></li>
                                        <li><a href="#" class="hover:text-[#E50913] transition">Gaming</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- WHO WE HELP -->
                    <a href="#" class="hover:text-[#E50913] transition-colors duration-300">
                        WHO WE HELP
                    </a>


                    <!-- WHO WE ARE -->
                    <div class="relative" @mouseenter="activeMega = 'company'" @mouseleave="activeMega = null">

                        <button class="flex items-center gap-1 hover:text-[#E50913] transition-colors duration-300">
                            WHO WE ARE

                            <!-- Arrow -->
                            <svg class="w-4 h-4 transition-transform duration-300"
                                :class="{ 'rotate-90': activeMega === 'company' }" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </button>

                        <!-- Mega Menu -->
                        <div x-show="activeMega === 'company'" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-y-4"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-200"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-4"
                            class="fixed left-0 top-20 w-full bg-white text-gray-900 border-t border-gray-200 shadow-xl z-50">

                            <div class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-3 gap-16">

                                <div>
                                    <h3 class="text-xl font-semibold mb-6">About</h3>
                                    <ul class="space-y-4">
                                        <li><a href="#" class="hover:text-[#E50913] transition">Our Story</a></li>
                                        <li><a href="#" class="hover:text-[#E50913] transition">Leadership</a>
                                        </li>
                                        <li><a href="#" class="hover:text-[#E50913] transition">Global
                                                Presence</a></li>
                                    </ul>
                                </div>

                                <div>
                                    <h3 class="text-xl font-semibold mb-6">Culture</h3>
                                    <ul class="space-y-4">
                                        <li><a href="#" class="hover:text-[#E50913] transition">Life at Egency
                                                Digital</a></li>
                                        <li><a href="#" class="hover:text-[#E50913] transition">Diversity</a></li>
                                        <li><a href="#" class="hover:text-[#E50913] transition">Events</a></li>
                                    </ul>
                                </div>

                                <div>
                                    <h3 class="text-xl font-semibold mb-6">Connect</h3>
                                    <ul class="space-y-4">
                                        <li><a href="#" class="hover:text-[#E50913] transition">Careers</a></li>
                                        <li><a href="#" class="hover:text-[#E50913] transition">Contact</a></li>
                                        <li><a href="#" class="hover:text-[#E50913] transition">Partnerships</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>


                    <a href="#" class="hover:text-[#E50913] transition-colors duration-300">
                        HOW WE DELIVER
                    </a>

                    <a href="#" class="hover:text-[#E50913] transition-colors duration-300">
                        JOIN EGENCY
                    </a>

                </nav>

            </div>

            <!-- ===== RIGHT SIDE ===== -->
            <div class="hidden lg:flex items-center gap-4">
                <a href="https://wa.me/+923250525254" target="_blank"
                    class="bg-[#E50913] text-white px-6 py-2.5 rounded-full hover:bg-[#E50913] flex align-middle gap-2">
                    {{-- <img src="{{ asset('images/icons8-whatsapp.gif') }}" alt=""> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 32 32" class="w-5 h-5">
                        <path
                            d="M16.01 3.2A12.8 12.8 0 003.2 16.01c0 2.26.6 4.39 1.74 6.29l-1.83 6.69 6.88-1.8a12.8 12.8 0 006.01 1.54h.01c7.07 0 12.8-5.74 12.8-12.8S23.07 3.2 16.01 3.2zm0 23.36a10.5 10.5 0 01-5.37-1.47l-.38-.23-4.09 1.07 1.1-3.98-.25-.41a10.52 10.52 0 01-1.57-5.53c0-5.81 4.73-10.54 10.54-10.54S26.54 10.2 26.54 16s-4.73 10.55-10.53 10.55zm5.73-7.88c-.31-.16-1.85-.91-2.14-1.01-.29-.1-.5-.16-.71.15-.2.29-.81 1.01-.99 1.22-.18.2-.36.22-.67.06-.31-.16-1.32-.49-2.51-1.56a9.33 9.33 0 01-1.73-2.15c-.18-.31-.02-.48.14-.63.14-.14.31-.36.47-.54.15-.18.2-.31.31-.52.1-.2.05-.39-.02-.55-.07-.16-.71-1.72-.97-2.36-.25-.6-.5-.52-.71-.53h-.61c-.2 0-.52.08-.8.39s-1.05 1.03-1.05 2.5 1.08 2.9 1.23 3.1c.15.2 2.11 3.21 5.1 4.5.71.31 1.27.49 1.7.63.71.23 1.35.2 1.86.12.57-.09 1.85-.76 2.11-1.5.26-.73.26-1.35.18-1.49-.09-.13-.28-.2-.59-.35z">
                        </path>
                    </svg>
                    WhatsApp
                </a>
                <a href="mailto:Info@egencydigital.com"
                    class="flex align-middle gap-2 border border-[#E50913] text-[#E50913] px-6 py-2.5 rounded-full hover:bg-[#E50913]/10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 12H8m8-4H8m8 8H8m14 0a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h12a2 2 0 012 2v12z">
                        </path>
                    </svg>
                    Email Us
                </a>
            </div>

            <!-- ===== MOBILE MENU BUTTON ===== -->
            <button class="lg:hidden text-2xl" @click="mobileOpen = !mobileOpen">
                ☰
            </button>

        </div>
    </div>
</header>


<!-- ================= MOBILE MENU ================= -->
<div x-show="mobileOpen" x-transition class="lg:hidden fixed inset-0 bg-black/50 z-40">

    <div class="absolute right-0 top-0 h-full w-80 bg-white shadow-xl p-6 overflow-y-auto">

        <button class="text-2xl mb-6" @click="mobileOpen = false">✕</button>

        <ul class="space-y-5 text-base font-medium">

            <li>
                <button @click="mobileDropdown = mobileDropdown === 'services' ? null : 'services'"
                    class="flex justify-between w-full">
                    WHAT WE DO
                    <span>▼</span>
                </button>

                <ul x-show="mobileDropdown === 'services'" class="mt-3 pl-4 space-y-2 text-gray-600">
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">Telecommunication</a></li>
                    <li><a href="#">Healthcare</a></li>
                </ul>
            </li>

            <li><a href="#">WHO WE HELP</a></li>

            <li>
                <button @click="mobileDropdown = mobileDropdown === 'company' ? null : 'company'"
                    class="flex justify-between w-full">
                    WHO WE ARE
                    <span>▼</span>
                </button>

                <ul x-show="mobileDropdown === 'company'" class="mt-3 pl-4 space-y-2 text-gray-600">
                    <li><a href="#">Our Story</a></li>
                    <li><a href="#">Leadership</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
            </li>

            <li><a href="#">HOW WE DELIVER</a></li>
            <li><a href="#">JOIN DEVSINC</a></li>
        </ul>

        <div class="mt-8 space-y-4">
            <a href="#" class="block bg-[#E50913] text-white text-center py-3 rounded-full">
                Explore Careers
            </a>
            <a href="#" class="block border border-[#E50913] text-[#E50913] text-center py-3 rounded-full">
                Let's Talk
            </a>
        </div>

    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {

        const navbar = document.querySelector(".bg_nav");

        window.addEventListener("scroll", function() {

            if (window.scrollY > 80) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }

        });

    });
</script>

{{-- @endsection --}}
