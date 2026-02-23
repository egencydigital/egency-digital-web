<!-- ================= HEADER ================= -->
<header class="sticky top-0 z-50 bg-white border-b border-gray-200">

  <div class="max-w-7xl mx-auto px-6">
    <div class="flex items-center justify-between h-20">

      <!-- ===== LOGO ===== -->
      <div class="group flex items-center cursor-pointer">

        <div class="w-10 h-10 bg-[#E50913] rounded-md flex items-center justify-center
                    text-white font-bold text-xl transition-all duration-300
                    group-hover:scale-0 group-hover:opacity-0">
          Q
        </div>

        <span class="font-semibold text-lg tracking-tight text-gray-900
                     opacity-0 -translate-x-3 transition-all duration-300
                     group-hover:opacity-100 group-hover:translate-x-0">
          Egency Digital
        </span>
      </div>

      <!-- ===== DESKTOP NAV ===== -->
      <nav class="hidden lg:flex items-center gap-10 text-sm font-medium text-gray-800">

        <!-- WHAT WE DO -->
        <div class="relative"
             @mouseenter="activeMega = 'industries'"
             @mouseleave="activeMega = null">

          <button class="flex items-center gap-1 hover:text-[#E50913] transition">
            WHAT WE DO
            <svg class="w-4 h-4 transition"
                 :class="{ 'rotate-180': activeMega === 'industries' }"
                 fill="none" stroke="currentColor" stroke-width="2">
              <path d="M6 9l6 6 6-6"/>
            </svg>
          </button>

          <!-- Mega -->
          <div x-show="activeMega === 'industries'"
               x-transition
               class="fixed left-0 top-20 w-full bg-white border-t border-gray-200 shadow-lg">

            <div class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-2 gap-16">

              <div>
                <h2 class="text-3xl font-semibold mb-6">Industries</h2>
                <ul class="space-y-4 text-lg">
                  <li><a href="#" class="hover:text-[#E50913]">Travel & Hospitality</a></li>
                  <li><a href="#" class="hover:text-[#E50913]">Telecommunication</a></li>
                  <li><a href="#" class="hover:text-[#E50913]">Oil, Gas & Energy</a></li>
                  <li><a href="#" class="hover:text-[#E50913]">E-commerce</a></li>
                  <li><a href="#" class="hover:text-[#E50913]">Healthcare</a></li>
                </ul>
              </div>

              <div class="md:mt-14">
                <ul class="space-y-4 text-lg">
                  <li><a href="#" class="hover:text-[#E50913]">Public Sector</a></li>
                  <li><a href="#" class="hover:text-[#E50913]">Retail & CPG</a></li>
                  <li><a href="#" class="hover:text-[#E50913]">Startups</a></li>
                  <li><a href="#" class="hover:text-[#E50913]">Banking & Fintech</a></li>
                  <li><a href="#" class="hover:text-[#E50913]">Gaming</a></li>
                </ul>
              </div>

            </div>
          </div>
        </div>

        <!-- WHO WE HELP -->
        <a href="#" class="hover:text-[#E50913] transition">WHO WE HELP</a>

        <!-- WHO WE ARE -->
        <div class="relative"
             @mouseenter="activeMega = 'company'"
             @mouseleave="activeMega = null">

          <button class="flex items-center gap-1 hover:text-[#E50913] transition">
            WHO WE ARE
            <svg class="w-4 h-4 transition"
                 :class="{ 'rotate-180': activeMega === 'company' }"
                 fill="none" stroke="currentColor" stroke-width="2">
              <path d="M6 9l6 6 6-6"/>
            </svg>
          </button>

          <div x-show="activeMega === 'company'"
               x-transition
               class="fixed left-0 top-20 w-full bg-white border-t border-gray-200 shadow-lg">

            <div class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-3 gap-16">

              <div>
                <h3 class="text-xl font-semibold mb-6">About</h3>
                <ul class="space-y-4">
                  <li><a href="#" class="hover:text-[#E50913]">Our Story</a></li>
                  <li><a href="#" class="hover:text-[#E50913]">Leadership</a></li>
                  <li><a href="#" class="hover:text-[#E50913]">Global Presence</a></li>
                </ul>
              </div>

              <div>
                <h3 class="text-xl font-semibold mb-6">Culture</h3>
                <ul class="space-y-4">
                  <li><a href="#" class="hover:text-[#E50913]">Life at Egency Digital</a></li>
                  <li><a href="#" class="hover:text-[#E50913]">Diversity</a></li>
                  <li><a href="#" class="hover:text-[#E50913]">Events</a></li>
                </ul>
              </div>

              <div>
                <h3 class="text-xl font-semibold mb-6">Connect</h3>
                <ul class="space-y-4">
                  <li><a href="#" class="hover:text-[#E50913]">Careers</a></li>
                  <li><a href="#" class="hover:text-[#E50913]">Contact</a></li>
                  <li><a href="#" class="hover:text-[#E50913]">Partnerships</a></li>
                </ul>
              </div>

            </div>
          </div>
        </div>

        <a href="#" class="hover:text-[#E50913]">HOW WE DELIVER</a>
        <a href="#" class="hover:text-[#E50913]">JOIN DEVSINC</a>
      </nav>

      <!-- ===== RIGHT SIDE ===== -->
      <div class="hidden lg:flex items-center gap-4">
        <a href="#" class="bg-[#E50913] text-white px-6 py-2.5 rounded-full hover:bg-[#E50913]">
          Explore Careers
        </a>
        <a href="#" class="border border-[#E50913] text-[#E50913] px-6 py-2.5 rounded-full hover:bg-[#E50913]/10">
          Let's Talk
        </a>
      </div>

      <!-- ===== MOBILE MENU BUTTON ===== -->
      <button class="lg:hidden text-2xl"
              @click="mobileOpen = !mobileOpen">
        ☰
      </button>

    </div>
  </div>
</header>


<!-- ================= MOBILE MENU ================= -->
<div x-show="mobileOpen"
     x-transition
     class="lg:hidden fixed inset-0 bg-black/50 z-40">

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


{{-- @endsection --}}
