@extends('frontend.layout.layout')

@section('title', 'Home | Egency Digital')

@section('body')
    <style>

        .card-bg-image{
            background-image: url('images/advance-img.png');
            /* background-size: cover;
            background-position: center; */
        }


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
            padding: 14px 24px;
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
            background: #CC071E;
            font-size: 14px;
            color: white;
            padding: 0.65rem 1.5rem;
            border-radius: 9999px;
            font-weight: 500;
            align-self: flex-start;
        }

        .card:hover .overlay button {
            opacity: 1;
            transform: translateY(0);
        }

        *======Container======*/ .project-item {
            padding: 60px 20px;
            display: flex;
            justify-content: center;
        }

        /* ====== Laptop Container ====== */
        .laptop-container {
            position: relative;
            max-width: 500px;
            width: 100%;
            margin: auto;
            filter: drop-shadow(0 20px 40px rgba(0, 0, 0, 0.18));
            transition: transform 0.4s ease;
        }

        .laptop-container:hover {
            transform: translateY(-8px);
        }

        /* ====== Laptop Frame ====== */
        .laptop-frame {
            width: 100%;
            height: auto;
            display: block;
        }

        /* ====== Screen Area ====== */
        .screen-area {
            position: absolute;
            top: 7.5%;
            left: 13.8%;
            right: 13.8%;
            bottom: 12%;
            overflow: hidden;
            background: #111827;
            border-radius: 6px;
        }

        /* ====== Glare Effect ====== */
        .screen-area::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 20% 20%,
                    rgba(255, 255, 255, 0.08) 0%,
                    transparent 60%);
            opacity: 0;
            transition: opacity 0.4s ease;
            pointer-events: none;
            z-index: 2;
        }

        .laptop-container:hover .screen-area::before {
            opacity: 1;
        }

        /* ====== Website Image Scroll Effect ====== */
        .website-image {
            position: absolute;
            width: 100%;
            height: auto;
            min-height: 200%;
            object-fit: cover;
            transition: transform 8s ease-in-out;
            cursor: zoom-in;
        }

        /* Smooth Vertical Scroll */
        .laptop-container:hover .website-image {
            transform: translateY(-100%);
        }

        /* ====== Image Viewer Modal ====== */
        .viewer {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.9);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            cursor: zoom-out;
        }

        .viewer img {
            max-width: 90%;
            max-height: 90%;
            border-radius: 8px;
        }
    </style>

    <script src="https://unpkg.com/gsap@3/dist/gsap.min.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>

    <section class="relative min-h-screen flex items-center px-6 py-20 md:pb-12 md:pt-32 overflow-hidden">

        <!-- Background Video -->
        <video src="{{ asset('video/15307455_2560_1440_30fps.mp4') }}" autoplay muted loop playsinline preload="none"
            class="absolute inset-0 w-full h-full object-cover">
        </video>

        <!-- Gradient + Dark Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-black/70"></div>

        <!-- Content Container -->
        <div class="relative z-10 max-w-7xl mx-auto w-full">

            <!-- Hero Content -->
            <div class="max-w-3xl text-left mt-3">

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                    WE ARE Egency Digital!
                </h1>

                <p class="text-lg sm:text-xl text-gray-200 mb-10 leading-relaxed">
                    We don't just create digital experiences We craft immersive brand journeys that captivate audiences and
                    drive real business results. Our team of passionate innovators combines cutting-edge technology with
                    stunning design to elevate your brand above the competition.
                    <br class="hidden sm:inline">

                </p>

                <x-button text="Get in Touch" link="contact" />

            </div>

            <!-- Featured In Section -->
            <div class="mt-16 md:mt-18">

                <p class="text-white text-lg mb-6 text-left">
                    Featured In:
                </p>

                <div class="flex flex-wrap items-center gap-8 md:gap-14 opacity-90">
                    <div class="flex flex-col gap-3">
                        <h3 class="text-3xl text-white font-extrabold">Behance</h3>
                        <h3 class="text-3xl text-white font-extrabold">FaceBook</h3>
                    </div>
                    <div class="flex flex-col gap-3">
                        <h3 class="text-3xl text-white font-extrabold">Google</h3>
                        <h3 class="text-3xl text-white font-extrabold">Behance</h3>
                    </div>


                    {{-- <img src="{{ asset('images/2.png') }}" alt="Forbes"
                        class="h-8 md:h-10 object-contain hover:opacity-100 transition duration-300">

                    <img src="{{ asset('images/logos/business-insider.png') }}" alt="Business Insider"
                        class="h-8 md:h-10 object-contain hover:opacity-100 transition duration-300">

                    <img src="{{ asset('images/logos/new-york-weekly.png') }}" alt="New York Weekly"
                        class="h-8 md:h-10 object-contain hover:opacity-100 transition duration-300">

                    <img src="{{ asset('images/logos/mashable.png') }}" alt="Mashable"
                        class="h-8 md:h-10 object-contain hover:opacity-100 transition duration-300"> --}}

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

    {{-- card Section  --}}
    <section class="py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

        <!-- Left Content -->
        <div>
            <h2 class="text-3xl lg:text-4xl font-bold mb-6 leading-snug">
                Advanced Technology for
                <span class="text-[#B30718]">Seamless Transactions</span>
            </h2>

            <p class="text-gray-600 mb-6 leading-relaxed">
                Leverage our state-of-the-art technology to streamline your payment
                processes, making transactions faster, more secure, and easier to manage.
            </p>

            <x-button text="Explore More" link="#" />
        </div>

        <!-- Right Card Section -->
        <div class="relative">

            <!-- Background Image Container -->
            <div class="rounded-3xl overflow-hidden relative flex items-end card-bg-image p-2">
                <!-- Content Card -->
                <div class="relative bg-white rounded-2xl p-7 m-6 w-full">

                    <!-- Item 1 -->
                    <div class="pb-4 border-b border-gray-200">
                        <h3 class="text-2xl font-semibold mb-1">Scalability</h3>
                        <p class="text-gray-600 text-sm">
                            Grow your business without limits.
                        </p>
                    </div>

                    <!-- Item 2 -->
                    <div class="py-4 border-b border-gray-200">
                        <h3 class="text-2xl font-semibold mb-1">Speed</h3>
                        <p class="text-gray-600 text-sm">
                            Fast transaction processing, minimizing delays.
                        </p>
                    </div>

                    <!-- Item 3 -->
                    <div class="pt-4">
                        <h3 class="text-xl font-semibold mb-1">Integration</h3>
                        <p class="text-gray-600 text-sm">
                            Easy integration with your existing systems.
                        </p>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

    @php
        $services = [
            ['title' => 'Design Process', 'image' => 'https://picsum.photos/500/600?1'],
            ['title' => 'Creative Strategy', 'image' => 'https://picsum.photos/500/600?2'],
            ['title' => 'Brand Identity', 'image' => 'https://picsum.photos/500/600?3'],
            ['title' => 'UI/UX Solutions', 'image' => 'https://picsum.photos/500/600?4'],
            ['title' => 'Web Development', 'image' => 'https://picsum.photos/500/600?5'],
            ['title' => 'Marketing Growth', 'image' => 'https://picsum.photos/500/600?6'],
            ['title' => 'Product Design', 'image' => 'https://picsum.photos/500/600?7'],
            ['title' => 'Business Consulting', 'image' => 'https://picsum.photos/500/600?8'],
        ];
    @endphp

    <x-services-grid :services="$services" />


    {{-- <x-blog-featured-insights /> --}}


    <section class="pt-28 bg-[#f5f5f5] overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 xl:gap-0">

            <!-- LEFT CONTENT -->
            <div class="sticky top-32 h-fit lg:pr-8">
                <p class="text-[#CC071E] tracking-[4px] uppercase mb-6 font-medium">
                    Featured Insights
                </p>

                <h2 class="text-5xl md:text-6xl font-semibold leading-tight text-gray-900 mb-6">
                    Stories of our transformations across Services and Industries
                </h2>

                <p class="text-xl md:text-2xl text-gray-600 mb-10">
                    From Concept to Completion
                </p>

                <x-button text="Explore More" link="#insights" />
            </div>

            <!-- RIGHT SIDE -->
            <div class="flex gap-8 relative">

                <!-- COLUMN 1 (2 CARDS) -->
                <div class="flex flex-col gap-8 w-1/3 parallax-slow">

                    <div class="card h-[260px]">
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

                    <div class="card h-[260px]">
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
                    <div class="card h-[260px]">
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

                    <div class="card h-[260px]">
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

                    <div class="card h-[260px]">
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

                    <div class="card h-[260px]">
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

                    <div class="card h-[260px]">
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

                    <div class="card h-[260px]">
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


    {{-- Project Cards with Parallax Scroll --}}
    <div class="sub-title">
        <h3>Our Projects</h3>
    </div>
    <div class="project-item grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 max-w-7xl mx-auto px-6 py-20">

        <div class="laptop-container group">

            <!-- Laptop Frame -->
            <img src="{{ asset('images/laptop-mockup.png') }}" alt="Laptop frame" class="laptop-frame" loading="lazy">

            <!-- Screen Area -->
            <div class="screen-area">
                <img src="{{ asset('images/screencapture-a-texofficial-2026-03-01-17_22_38.png') }}" alt="Project 1" class="website-image"
                    onclick="openViewer(this)" loading="lazy">
            </div>

        </div>
        <div class="laptop-container group">

            <!-- Laptop Frame -->
            <img src="{{ asset('images/laptop-mockup.png') }}" alt="Laptop frame" class="laptop-frame" loading="lazy">

            <!-- Screen Area -->
            <div class="screen-area">
                <img src="{{ asset('images/project-16.webp') }}" alt="Project 1" class="website-image"
                    onclick="openViewer(this)" loading="lazy">
            </div>

        </div>
        <div class="laptop-container group">

            <!-- Laptop Frame -->
            <img src="{{ asset('images/laptop-mockup.png') }}" alt="Laptop frame" class="laptop-frame" loading="lazy">

            <!-- Screen Area -->
            <div class="screen-area">
                <img src="{{ asset('images/screencapture-onekarbn-2026-03-01-16_34_32.png') }}" alt="Project 1" class="website-image"
                    onclick="openViewer(this)" loading="lazy">
            </div>

        </div>
        <div class="laptop-container group">

            <!-- Laptop Frame -->
            <img src="{{ asset('images/laptop-mockup.png') }}" alt="Laptop frame" class="laptop-frame" loading="lazy">

            <!-- Screen Area -->
            <div class="screen-area">
                <img src="{{ asset('images/project-16.webp') }}" alt="Project 1" class="website-image"
                    onclick="openViewer(this)" loading="lazy">
            </div>

        </div>
        <div class="laptop-container group">

            <!-- Laptop Frame -->
            <img src="{{ asset('images/laptop-mockup.png') }}" alt="Laptop frame" class="laptop-frame" loading="lazy">

            <!-- Screen Area -->
            <div class="screen-area">
                <img src="{{ asset('images/screencapture-onekarbn-2026-03-01-16_34_32.png') }}" alt="Project 1" class="website-image"
                    onclick="openViewer(this)" loading="lazy">
            </div>

        </div>
        <div class="laptop-container group">

            <!-- Laptop Frame -->
            <img src="{{ asset('images/laptop-mockup.png') }}" alt="Laptop frame" class="laptop-frame" loading="lazy">

            <!-- Screen Area -->
            <div class="screen-area">
                <img src="{{ asset('images/screencapture-a-texofficial-2026-03-01-17_22_38.png') }}" alt="Project 1" class="website-image"
                    onclick="openViewer(this)" loading="lazy">
            </div>

        </div>
    </div>

    <!-- Image Viewer Modal -->
    <div id="imageViewer" class="viewer" onclick="closeViewer()">
        <img id="viewerImg" src="">
    </div>



    <section class="relative py-32 bg-[#f5f7f9] overflow-hidden">

        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-20">

            <!-- LEFT CONTENT (Sticky) -->
            <div class="sticky top-32 h-fit">
                <p class="text-teal-500 tracking-[4px] uppercase mb-6 text-sm">
                    Our Capabilities
                </p>

                <h2 class="text-5xl font-bold text-black leading-tight mb-8">
                    Transforming Ideas <br>
                    Into Digital Reality
                </h2>

                <p class="text-gray-600 text-lg leading-relaxed mb-10">
                    We help startups and enterprises build scalable, secure and
                    high-performing digital products with modern technologies.
                </p>

                <button class="px-8 py-4 bg-black text-white rounded-full hover:bg-teal-500 transition duration-300">
                    Explore More
                </button>
            </div>

            <!-- RIGHT CARDS -->
            <div class="space-y-10">

                <!-- Card 1 -->
                <div class="animated-card bg-white p-10 rounded-3xl shadow-xl">
                    <h3 class="text-2xl font-semibold mb-4">Product Development</h3>
                    <p class="text-gray-600">
                        End-to-end product engineering from idea validation to deployment.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="animated-card bg-white p-10 rounded-3xl shadow-xl">
                    <h3 class="text-2xl font-semibold mb-4">UI/UX Design</h3>
                    <p class="text-gray-600">
                        Human-centered designs that enhance user engagement and retention.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="animated-card bg-white p-10 rounded-3xl shadow-xl">
                    <h3 class="text-2xl font-semibold mb-4">Cloud Solutions</h3>
                    <p class="text-gray-600">
                        Scalable and secure cloud infrastructure tailored for your growth.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="animated-card bg-white p-10 rounded-3xl shadow-xl">
                    <h3 class="text-2xl font-semibold mb-4">AI & Automation</h3>
                    <p class="text-gray-600">
                        Intelligent automation solutions powered by machine learning.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 bg-[#f5f7f9]">

        <div
            class="relative max-w-6xl mx-auto px-16 py-6
                bg-[#101828]
                rounded-3xl flex items-center max-h-[340px]">

            <!-- LEFT CONTENT -->
            <div class="w-full lg:w-1/2 z-10">

                <h2 class="text-4xl font-bold leading-tight mb-6">
                    <span class="text-red-600">GRAPHIC DESIGN</span>
                    <span class="text-white"> EVENT<br>COMING SOON!</span>
                </h2>

                <p class="text-gray-300 mb-8 max-w-md leading-relaxed">
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s.
                </p>

                <a href="{{ url('/contact') }}"
                    class="inline-block bg-red-600 hover:bg-red-700
                      text-white font-semibold px-8 py-4
                      rounded-full text-lg transition duration-300">
                    Register now!
                </a>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="hidden lg:flex w-1/2 justify-end relative">
                <img src="{{ asset('images/man-with-glasses-holding-blue-folder-with-books 1.png') }}" alt="Student"
                    class="relative z-10 max-h-[440px] object-contain bottom-[50px]">
            </div>

            <!-- FLOATING DOTS -->
            <span class="absolute top-10 right-32 w-6 h-6 bg-blue-500 rounded-full"></span>
            <span class="absolute top-16 right-[416px] w-4 h-4 bg-orange-400 rounded-full"></span>
            <span class="absolute bottom-8 right-[496px] w-8 h-8 bg-purple-500 rounded-full opacity-80"></span>
            <span class="absolute bottom-20 left-84 w-5 h-5 bg-teal-400 rounded-full"></span>

        </div>

    </section>

    {{-- contact Form --}}

    <section class="py-16 bg-[#FFFFFF]">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="grid lg:grid-cols-3 gap-12">

                <!-- CONTACT FORM -->
                <div class="lg:col-span-2 border-8 rounded-2xl   border-[#F7F7F8] p-12">
                    <form class="space-y-6">

                        <div class="grid md:grid-cols-2 gap-6">
                            <input type="text" placeholder="First Name"
                                class="w-full bg-[#F7F7F8] rounded-full px-6 py-3 outline-none focus:ring-2 focus:ring-[#cc0710]">

                            <input type="text" placeholder="Phone"
                                class="w-full bg-[#F7F7F8] rounded-full px-6 py-3 outline-none focus:ring-2 focus:ring-[#cc0710]">
                        </div>

                        <input type="email" placeholder="Email"
                            class="w-full bg-[#F7F7F8] rounded-full px-6 py-3 outline-none focus:ring-2 focus:ring-[#cc0710]">

                        <textarea rows="5" placeholder="Message"
                            class="w-full bg-[#F7F7F8] rounded-2xl px-6 py-4 outline-none focus:ring-2 focus:ring-[#cc0710]"></textarea>

                        {{-- <button
                        class="bg-[#5f8f91] text-white px-8 py-3 rounded-full hover:bg-[#4c7779] transition">
                        Submit Button
                    </button> --}}
                        <button class="bg-[#E50913] text-white px-8 py-3 rounded-full hover:bg-[#4c7779] transition">
                            Submit Button
                        </button>

                    </form>
                </div>

                <!-- RIGHT SIDE -->
                <div class="lg:col-span-1">
                    <div class="flex flex-col gap-4">

                        <!-- IMAGE CARD -->
                        <div class="rounded-2xl overflow-hidden shadow-md h-[400px] bg-cover bg-center"
                            style="background-image: url('images/image.png');">
                        </div>

                        <!-- CONTACT INFO CARD -->
                        <div class="bg-[#F7F7F8] rounded-2xl p-6 flex items-center justify-between gap-4 shadow-sm">

                            <div>
                                <h4 class="font-semibold text-lg mb-1">
                                    You Can Email Here
                                </h4>
                                <p class="text-sm text-gray-600">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>

                            <div class="bg-[#E50913] p-4 rounded-full shadow-md flex items-center justify-center">
                                <img src="{{ asset('images/Icon.png') }}" alt="">
                            </div>

                        </div>

                    </div>
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

    <script>
        gsap.registerPlugin(ScrollTrigger);

        gsap.utils.toArray(".animated-card").forEach((card, i) => {
            gsap.from(card, {
                y: 100,
                opacity: 0,
                duration: 1,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: card,
                    start: "top 85%",
                    toggleActions: "play none none none"
                }
            });
        });


        function openViewer(img) {
            document.getElementById("imageViewer").style.display = "flex";
            document.getElementById("viewerImg").src = img.src;
        }

        function closeViewer() {
            document.getElementById("imageViewer").style.display = "none";
        }
    </script>

@endsection
