@extends('frontend.layout.layout')

@section('title', 'Home | Egency Digital')

@section('body')
    <style>
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .slider {
            height: 100px;
            overflow: hidden;
            position: relative;
            width: 100%;
            background: #fff;
        }

        .slide-track {
            display: flex;
            width: max-content;
            animation: scroll 40s linear infinite;
            cursor: pointer;
        }

        .slide {
            height: 100px;
            width: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 20px;
        }

        .slide img {
            max-height: 60px;
            width: auto;
            object-fit: contain;
            opacity: 0.8;
            transition: 0.3s ease;
        }

        .slide img:hover {
            opacity: 1;
            transform: scale(1.05);
        }

        /* Fade effect on sides */
        .slider::before,
        .slider::after {
            content: "";
            position: absolute;
            top: 0;
            width: 120px;
            height: 100%;
            z-index: 2;
        }

        .slider::before {
            left: 0;
            background: linear-gradient(to right, #fff 0%, transparent 100%);
        }

        .slider::after {
            right: 0;
            background: linear-gradient(to left, #fff 0%, transparent 100%);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .slide {
                width: 180px;
            }
        }


        .card {
            position: relative;
            border-radius: 1.5rem;
            /* 24px */
            overflow: hidden;
            cursor: pointer;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.08);
            transition: transform 0.5s ease, box-shadow 0.5s ease;
        }

        .card:hover {
            transform: translateY(-12px);
            box-shadow: 0 35px 70px -12px rgba(0, 0, 0, 0.12);
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.85) 0%, rgba(0, 0, 0, 0.15) 60%);
            color: white;
            padding: 18px 28px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 1rem;
        }

        .overlay p {
            font-size: 0.875rem;
            font-weight: 500;
            opacity: 0.9;
        }

        .overlay h3 {
            line-height: 1.3;
            font-size: 16px;
        }

        .overlay button {
            opacity: 0;
            transform: translateY(16px);
            transition: all 0.4s ease;
            background: #14b8a6;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 9999px;
            font-weight: 500;
            align-self: flex-start;
        }

        .card:hover .overlay button {
            opacity: 1;
            transform: translateY(0);
        }
    </style>


    <section class="relative min-h-screen flex items-center px-6 py-20 md:py-32 overflow-hidden">

        <!-- Background Video -->
        <video src="{{ asset('video/15307455_2560_1440_30fps.mp4') }}" autoplay muted loop playsinline preload="none"
            class="absolute inset-0 w-full h-full object-cover">
        </video>

        <!-- Gradient + Dark Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-black/70"></div>

        <!-- Content Container -->
        <div class="relative z-10 max-w-7xl mx-auto w-full">

            <!-- Hero Content -->
            <div class="max-w-3xl text-left">

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                    WE ARE Egency Digital!
                </h1>

                <p class="text-lg sm:text-xl text-gray-200 mb-10 leading-relaxed">
                    We don't just create digital experiences We craft immersive brand journeys that captivate audiences and
                    drive real business results. Our team of passionate innovators combines cutting-edge technology with
                    stunning design to elevate your brand above the competition.
                    <br class="hidden sm:inline">

                </p>

                <a href="#contact"
                    class="inline-block bg-[#CC071E] hover:bg-[#b30718] text-white font-semibold px-8 py-4 rounded-full text-lg transition-all duration-300 shadow-lg hover:shadow-2xl hover:scale-105">
                    Get in Touch
                </a>

            </div>

            <!-- Featured In Section -->
            <div class="mt-16 md:mt-24">

                <p class="text-gray-300 text-lg mb-6 text-left">
                    Featured In:
                </p>

                <div class="flex flex-wrap items-center gap-8 md:gap-14 opacity-90">

                    <img src="{{ asset('images/logos/forbes.png') }}" alt="Forbes"
                        class="h-8 md:h-10 object-contain hover:opacity-100 transition duration-300">

                    <img src="{{ asset('images/logos/business-insider.png') }}" alt="Business Insider"
                        class="h-8 md:h-10 object-contain hover:opacity-100 transition duration-300">

                    <img src="{{ asset('images/logos/new-york-weekly.png') }}" alt="New York Weekly"
                        class="h-8 md:h-10 object-contain hover:opacity-100 transition duration-300">

                    <img src="{{ asset('images/logos/mashable.png') }}" alt="Mashable"
                        class="h-8 md:h-10 object-contain hover:opacity-100 transition duration-300">

                </div>

            </div>

        </div>

    </section>

    {{-- logo slider --}}
    <div class="slider">
        <div class="slide-track">
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250"
                    alt="" />
            </div>
        </div>
    </div>

    <section class="">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-4">
            <div class="bg-neutral-primary-soft block max-w-sm border border-default rounded-base shadow-xs">
                <a href="#">
                    <img class="rounded-t-base" src="/docs/images/blog/image-1.jpg" alt="" />

                <div class="p-6 text-center">
                        <h5 class="mt-3 mb-6 text-2xl font-semibold tracking-tight text-heading">Streamlining your design
                            process today.</h5>
                    </a>
                </div>
            </div>

        </div>
    </section>



    {{-- <x-blog-featured-insights /> --}}


    <section class="pt-28 bg-[#f5f5f5] overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 xl:gap-0">

            <!-- LEFT CONTENT -->
            <div class="sticky top-32 h-fit lg:pr-8">
                <p class="text-teal-500 tracking-[4px] uppercase mb-6 font-medium">
                    Featured Insights
                </p>

                <h2 class="text-5xl md:text-6xl font-semibold leading-tight text-gray-900 mb-6">
                    Stories of our transformations across Services and Industries
                </h2>

                <p class="text-xl md:text-2xl text-gray-600 mb-10">
                    From Concept to Completion
                </p>

                <button
                    class="bg-teal-500 hover:bg-teal-600 text-white px-10 py-5 rounded-full text-lg font-medium transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105">
                    Explore More
                </button>
            </div>

            <!-- RIGHT SIDE -->
            <div class="flex gap-8 relative">

                <!-- COLUMN 1 (2 CARDS) -->
                <div class="flex flex-col gap-8 w-1/3 parallax-slow">

                    <div class="card h-[280px]">
                        <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?w=800" />
                        <div class="overlay">
                            <div>
                                <p>Case Study</p>
                                <h3 class="text-xl font-semibold mt-2">
                                    US Fashion Resale Platform Scales to 100K Monthly Transactions
                                </h3>
                            </div>
                            <button>Read More →</button>
                        </div>
                    </div>

                    <div class="card h-[280px]">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=800" />
                        <div class="overlay">
                            <div>
                                <p>Blogs</p>
                                <h3 class="text-xl font-semibold mt-2">
                                    How Cloud Computing Can Transform Small Businesses
                                </h3>
                            </div>
                            <button>Explore →</button>
                        </div>
                    </div>
                    <div class="card h-[280px]">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=800" />
                        <div class="overlay">
                            <div>
                                <p>Blogs</p>
                                <h3 class="text-xl font-semibold mt-2">
                                    How Cloud Computing Can Transform Small Businesses
                                </h3>
                            </div>
                            <button>Explore →</button>
                        </div>
                    </div>

                </div>

                <!-- COLUMN 2 (3 CARDS) -->
                <div class="flex flex-col gap-8 w-1/3 mt-20 parallax-fast">

                    <div class="card h-[280px]">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800" />
                        <div class="overlay">
                            <div>
                                <p>Blogs</p>
                                <h3 class="text-xl font-semibold mt-2">
                                    Custom Web Application Development
                                </h3>
                            </div>
                            <button>Explore →</button>
                        </div>
                    </div>

                    <div class="card h-[280px]">
                        <img src="https://images.unsplash.com/photo-1492724441997-5dc865305da7?w=800" />
                        <div class="overlay">
                            <div>
                                <p>Case Study</p>
                                <h3 class="text-xl font-semibold mt-2">
                                    Shopify Migration Drives 55% Growth
                                </h3>
                            </div>
                            <button>View Case →</button>
                        </div>
                    </div>

                    <div class="card h-[280px]">
                        <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?w=800" />
                        <div class="overlay">
                            <div>
                                <p>Blogs</p>
                                <h3 class="text-xl font-semibold mt-2">
                                    Trends of Mobile Design
                                </h3>
                            </div>
                            <button>Read →</button>
                        </div>
                    </div>

                </div>

                <!-- COLUMN 3 (3 CARDS) -->
                <div class="hidden lg:flex flex-col gap-8 w-1/3 mt-40 parallax-slow">

                    <div class="card h-[280px]">
                        <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?w=800" />
                        <div class="overlay">
                            <div>
                                <p>Case Study</p>
                                <h3 class="text-xl font-semibold mt-2">
                                    Hospitality AI Platform Reconciles $300M+
                                </h3>
                            </div>
                            <button>Read Case →</button>
                        </div>
                    </div>

                    <div class="card h-[280px]">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=800" />
                        <div class="overlay">
                            <div>
                                <p>Case Study</p>
                                <h3 class="text-xl font-semibold mt-2">
                                    Pakistan Furniture Leader Migration
                                </h3>
                            </div>
                            <button>Read Case →</button>
                        </div>
                    </div>

                    {{-- <div class="card h-[280px]">
                    <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?w=800" />
                    <div class="overlay">
                        <div>
                            <p>Case Study</p>
                            <h3 class="text-xl font-semibold mt-2">
                                US Fintech AI Secures $2M+ Funding
                            </h3>
                        </div>
                        <button>Read Case →</button>
                    </div>
                </div> --}}

                </div>

            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    <script>
        gsap.registerPlugin(ScrollTrigger);

        gsap.to(".parallax-slow", {
            y: -120,
            scrollTrigger: {
                trigger: ".parallax-slow",
                start: "top bottom",
                end: "bottom top",
                scrub: 1.2,
            }
        });

        gsap.to(".parallax-fast", {
            y: -200,
            scrollTrigger: {
                trigger: ".parallax-fast",
                start: "top bottom",
                end: "bottom top",
                scrub: 1.2,
            }
        });
    </script>

@endsection
