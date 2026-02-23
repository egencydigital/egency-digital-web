<section id="featured-insights" class="py-28 bg-[#f5f5f5] overflow-hidden">

    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-20">

        <!-- LEFT CONTENT -->
        <div class="sticky top-32 h-fit reveal-left">
            <p class="text-teal-500 tracking-[4px] uppercase mb-6">
                Featured Insights
            </p>

            <h2 class="text-5xl lg:text-6xl font-semibold leading-[1.1] text-gray-800 mb-6">
                Stories of our transformations across Services and Industries
            </h2>

            <p class="text-xl lg:text-2xl text-gray-500 mb-10">
                From Concept to Completion
            </p>

            <button
                class="bg-teal-500 hover:bg-teal-600 text-white px-10 py-5 rounded-full text-lg transition-all duration-300 shadow-lg hover:scale-105">
                Explore More
            </button>
        </div>

        <!-- RIGHT SIDE -->
        <div class="relative flex gap-8 reveal-right">

            {{-- Column 1 --}}
            <div class="flex flex-col gap-8 parallax-slow cards-column">
                @foreach ($items['column1'] ?? [] as $item)
                    @include('components.partials.insight-card', ['item' => $item])
                @endforeach
            </div>

            {{-- Column 2 --}}
            <div class="flex flex-col gap-8 mt-24 parallax-medium cards-column">
                @foreach ($items['column2'] ?? [] as $item)
                    @include('components.partials.insight-card', ['item' => $item])
                @endforeach
            </div>

            {{-- Column 3 --}}
            <div class="flex flex-col gap-8 mt-16 parallax-fast cards-column">
                @foreach ($items['column3'] ?? [] as $item)
                    @include('components.partials.insight-card', ['item' => $item])
                @endforeach
            </div>

        </div>
    </div>
</section>

@once
    @push('styles')
<style>

/* Reveal Initial State */
.reveal-left {
    opacity: 0;
    transform: translateX(-80px);
}

.reveal-right {
    opacity: 0;
    transform: translateX(80px);
}

.cards-column .card {
    opacity: 0;
    transform: translateY(80px);
}

/* Card Styling */
.card {
    position: relative;
    overflow: hidden;
    border-radius: 20px;
}

.overlay {
    background: linear-gradient(
        to top,
        rgba(0,0,0,0.85) 0%,
        rgba(0,0,0,0.6) 40%,
        rgba(0,0,0,0.2) 70%,
        transparent 100%
    );
    transition: all 0.5s ease;
}

.card::after {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.3);
    opacity: 0;
    transition: opacity 0.5s ease;
}

.card:hover::after {
    opacity: 1;
}

</style>
@endpush

    @push('scripts')

<!-- GSAP CDN -->
<script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/ScrollTrigger.min.js"></script>

<script>
gsap.registerPlugin(ScrollTrigger);

//////////////////////////////////////////////////////
// SECTION REVEAL (Devsinc Style)
//////////////////////////////////////////////////////

let tl = gsap.timeline({
    scrollTrigger: {
        trigger: "#featured-insights",
        start: "top 75%",
        toggleActions: "play none none none"
    }
});

tl.to(".reveal-left", {
    x: 0,
    opacity: 1,
    duration: 1.2,
    ease: "power3.out"
})
.to(".reveal-right", {
    x: 0,
    opacity: 1,
    duration: 1.2,
    ease: "power3.out"
}, "-=0.9")
.to(".cards-column .card", {
    y: 0,
    opacity: 1,
    duration: 1,
    stagger: 0.15,
    ease: "power3.out"
}, "-=1");

//////////////////////////////////////////////////////
// PARALLAX
//////////////////////////////////////////////////////

gsap.utils.toArray([".parallax-slow", ".parallax-medium", ".parallax-fast"]).forEach((el) => {

    let movement = -120;

    if (el.classList.contains("parallax-medium")) movement = -200;
    if (el.classList.contains("parallax-fast")) movement = -280;

    gsap.to(el, {
        y: movement,
        ease: "none",
        scrollTrigger: {
            trigger: el,
            start: "top bottom",
            end: "bottom top",
            scrub: 1.5
        }
    });

});
</script>

@endpush
@endonce
