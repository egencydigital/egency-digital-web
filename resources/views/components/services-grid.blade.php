<section class="py-28 bg-gradient-to-b from-[#eef3f3] to-[#dce6e6]">

    <div class="max-w-7xl mx-auto px-8">
        <div class="sub-title">
            <h3>Our Services</h3>
        </div>

        <!-- Heading -->
        <h2 class="text-5xl font-bold text-black mb-16">
            Transform Your Business
        </h2>

        <!-- Cards -->
        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-10">

            @foreach($services as $service)
                <a href="#"
                   class="relative group rounded-3xl overflow-hidden h-[340px] block">

                    <!-- Image -->
                    <img src="{{ $service['image'] }}"
                         alt="{{ $service['title'] }}"
                         class="w-full h-full object-cover transition duration-700 ease-out group-hover:scale-110" />

                    <!-- Dark Overlay -->
                    <div class="absolute inset-0 bg-black/40 transition duration-700 group-hover:bg-black/60"></div>

                    <!-- Gradient Hover Layer -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent
                                opacity-80 group-hover:opacity-100 transition duration-700">
                    </div>

                    <!-- Title -->
                    <div class="absolute top-8 left-8 text-white">
                        <h3 class="text-2xl font-semibold">
                            {{ $service['title'] }}
                        </h3>
                    </div>

                </a>
            @endforeach

        </div>

        <!-- Button -->
        <div class="flex justify-center mt-20">
            <button class="px-12 py-4 rounded-full border border-black text-black
                           text-lg font-medium
                           transition-all duration-500
                           hover:bg-black hover:text-white hover:scale-105">
                View More Services
            </button>
        </div>

    </div>
</section>




{{-- <section
    x-data="{ showAll: false }"
    class="py-28 bg-gradient-to-b from-[#eef3f3] to-[#dce6e6]">

    <div class="max-w-7xl mx-auto px-8">

        <span class="text-sm tracking-wider uppercase text-gray-600">
            Our Services
        </span>

        <!-- Heading -->
        <h2 class="text-5xl font-bold text-black mb-16 mt-4">
            Transform Your Business
        </h2>

        <!-- Cards -->
        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-10">

            @foreach($services as $index => $service)

                <a href="#"
                   x-show="showAll || {{ $index }} < 4"
                   x-transition:enter="transition ease-out duration-700"
                   x-transition:enter-start="opacity-0 translate-y-8"
                   x-transition:enter-end="opacity-100 translate-y-0"
                   x-transition:leave="transition ease-in duration-500"
                   x-transition:leave-start="opacity-100 translate-y-0"
                   x-transition:leave-end="opacity-0 translate-y-8"
                   class="relative group rounded-3xl overflow-hidden h-[420px] block">

                    <!-- Image -->
                    <img src="{{ $service['image'] }}"
                         alt="{{ $service['title'] }}"
                         class="w-full h-full object-cover transition duration-700 ease-out group-hover:scale-110" />

                    <!-- Overlay -->
                    <div class="absolute inset-0
                                bg-gradient-to-t
                                from-black/80
                                via-black/30
                                to-transparent
                                transition-all duration-700
                                group-hover:via-[#E50913]/60">
                    </div>

                    <!-- Title -->
                    <div class="absolute top-8 left-8 text-white">
                        <h3 class="text-2xl font-semibold">
                            {{ $service['title'] }}
                        </h3>
                    </div>

                </a>

            @endforeach

        </div>

        <!-- Button -->
        @if(count($services) > 4)
        <div class="flex justify-center mt-20">
            <button
                @click="showAll = !showAll"
                class="px-12 py-4 rounded-full border border-black text-black
                       text-lg font-medium
                       transition-all duration-500
                       hover:bg-black hover:text-white hover:scale-105">

                <span x-text="showAll ? 'Show Less Services' : 'View More Services'"></span>

            </button>
        </div>
        @endif

    </div>
</section> --}}
