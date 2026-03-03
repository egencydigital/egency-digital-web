<footer class="bg-black pt-18 mt-12">
    <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-8 px-6">

        <!-- Logo & Description -->
        <div class="flex flex-col items-start">
            <!-- Logo with hover effect -->
            {{-- <h2 class="text-2xl font-bold mb-4 relative group cursor-pointer">
        <span class="inline-block">Egency</span>
        <span class="absolute left-0 top-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
          Egency Digital
        </span>
      </h2> --}}
            <h2 class="text-2xl font-bold mb-4 text-white">Egency Digital</h2>
            <p class="text-[#E5E5E5]">
                Transforming brands through innovative digital solutions since 2010.
            </p>
        </div>

        <!-- Quick Links -->
        <div>
            <h3 class="text-white text-xl font-semibold mb-4">Quick Links</h3>
            <ul class="space-y-2 text-[#E5E5E5] flex flex-col gap-0.5">
                <a href="{{ url('/') }}">
                    <li class="hover:text-[#CC0710] cursor-pointer">Home</li>
                </a>
                <a href="{{ url('/about-us') }}">
                    <li class="hover:text-[#CC0710] cursor-pointer">About Us</li>
                </a>
                <a href="{{ url('/services') }}">
                    <li class="hover:text-[#CC0710] cursor-pointer">Services</li>
                </a>
                <a href="{{ url('/contact') }}">
                    <li class="hover:text-[#CC0710] cursor-pointer">Contact</li>
                </a>
            </ul>
        </div>

        <!-- Contact Info -->
        <div>
            <h3 class="text-white text-xl font-semibold mb-4">Contact Us</h3>
            <div class="flex flex-col gap-1">
                <p class="text-[#E5E5E5]">Email: <a href="mailto:info@example.com"
                        class="hover:text-[#CC0710]">info@example.com</a></p>
                <p class="text-[#E5E5E5]">Phone: <a href="tel:+1234567890" class="hover:text-[#CC0710]">+1234567890</a>
                </p>
                <p class="text-[#E5E5E5]">Address: 123 Main Street, City, Country</p>
            </div>
        </div>

    </div>

    <!-- Footer Bottom -->
    <div class="bg-[#CC0710]">
        <div class="max-w-7xl mx-auto px-6 py-4 mt-8 text-center text-white text-sm">
            &copy; {{ date('Y') }} Egency Digital. All rights reserved.
        </div>
    </div>
</footer>
