@extends('frontend.layout.layout')
@section('title')
    Egency Digital - About us
@endsection
<style>
    .hero_section {
        /* background-image: url({{ asset('images/67512cc0cb0afece45d3ad68_about us -p-2000.avif') }}); */
        background-image: url('images/67512cc0cb0afece45d3ad68_about us -p-2000.avif');
        /* linear-gradient(
            to bottom,
            rgba(229, 9, 19, 0.7) 20%,
            rgba(0, 0, 0, 0.85) 90%
        ), */
        /* opacity: 9; */
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        height: 80vh;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center
    }

    .container {
        max-width: 1200px;
        width: 100%;
        padding: 0px 15px;
        margin: auto;
    }

    /**Typeo CSS End**/
    .faq-title {
        text-align: center;
        font-size: 45px;
        font-weight: normal;
    }

    .faq-group {
        display: flex;
        flex-flow: row wrap;
        width: 100%;
    }

    .faq-group .faq-left {
        width: 38%;
    }

    .faq-group .faq-right {
        width: 58%;
        border-left: #ccc 1px solid;
        padding-left: 30px;
        margin-left: 4%;
    }

    .faq-group h3 {
        font-size: 24px;
        font-weight: normal;
        margin: 35px 0 15px 0;
    }

    .faq-group h3:first-child {
        margin-top: 0px;
    }

    .faq-btns {
        margin-bottom: 40px;
    }

    .faq-btn {
        width: 100%;
        display: inline-block;
        border: #000 1px solid;
        border-radius: 4px;
        text-align: center;
        margin: 10px 0;
        background-color: #fff;
        padding: 14px;
        text-decoration: none;
        color: #000;
        transition: 0.5s all;
    }

    .faq-btn:hover {
        background-color: #000;
        color: #fff;
    }

    .faq-item {
        width: 100%;
        margin: 7px 0px;
        border-bottom: #ebebeb 1px solid;
    }

    .faq-item .faq-label {
        position: relative;
        width: 100%;
        padding: 12px 26px 12px 0px;
        cursor: pointer;
        font-size: 18px;
        color: #000;
        user-select: none;
        -webkit-user-select: none;
        -moz-user-select: none;
    }

    .faq-item .faq-label i {
        width: 18px;
        height: 100%;
        position: absolute;
        right: 0px;
        top: 0px;
    }

    .faq-item .faq-label i:before {
        content: '';
        position: absolute;
        left: 0px;
        right: 0px;
        top: 0px;
        bottom: 0px;
        margin: auto;
        width: 18px;
        height: 2px;
        background-color: #000;
    }

    .faq-item .faq-label i:after {
        content: '';
        position: absolute;
        left: 0px;
        right: 0px;
        top: 0px;
        bottom: 0px;
        margin: auto;
        width: 2px;
        height: 18px;
        background-color: #000;
        transition: 0.5s all;
        -webkit-transition: 0.5s all;
    }

    .faq-item.faq-item-show .faq-label i:after {
        opacity: 0;
    }

    .faq-cont {
        transition: 0.3s all;
        overflow: hidden;
        height: 0px;
    }

    .faq-item.faq-item-show .faq-cont {
        display: block;
        padding-top: 20px;
        padding-bottom: 20px;
        overflow: auto;
        height: auto;
    }

    .faq-cont p {
        margin: 0px 0 20px 0;
    }

    .faq-cont p:last-child {
        margin-bottom: 0px;
    }

    @media(max-width:992px) {
        .faq-group .faq-left {
            width: 100%;
        }

        .faq-group .faq-right {
            width: 100%;
            border-left: none;
            padding-left: 0;
            margin-left: 0;
        }
    }





    /* @layer utilities {
  .card {
    @apply transition-shadow duration-500;
  }
  .group:hover .card {
    @apply shadow-2xl;
  }
} */
</style>
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<!-- Bootstrap -->
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


@section('body')
    <section class="hero_section">
        <div
            class="max-w-5xl mx-auto flex justify-center rounded-2xl p-12 shadow-[0_20px_50px_rgba(0,0,0,0.5),0_10px_20px_rgba(0,0,0,0.3)]">
            <div>
                <h3 class="text-1xl text-[#fff] font-extrabold">About Us</h3>
                <h2 class="text-4xl text-[#fff] font-bold my-2">Empowering Businesses, Inspiring Innovation</h2>
                <p class=" text-[#fff]  my-2">At EgencyDigital, we specialize in transforming businesses with
                    enterprise-grade software solutions tailored to their needs. With a legacy of technical excellence, a
                    global team of over 1,200 experts, and a passion for innovation, we help organizations thrive in an
                    ever-evolving digital landscape.</p>
                <x-button text="Get In Touch" link="#" />
            </div>
        </div>
    </section>

    {{-- who we are section --}}
    <section class="bg-[#1E1E1E]">
        <div class="max-w-7xl mx-auto py-12 px-6 grid grid-cols-12 gap-8 items-center">

            <!-- Left Title -->
            <div class="col-span-12 md:col-span-4 border-r-2 border-red-600 pr-6">
                <h3 class="text-3xl md:text-4xl font-semibold text-white text-right p-2">
                    Who <br><span class="text-red-500">We Are</span>
                </h3>
            </div>

            <!-- Right Content -->
            <div class="col-span-12 md:col-span-8 text-white">
                <p class="text-lg leading-relaxed text-gray-200">
                    nfinPAY is a cutting-edge financial technology provider focused on redefining how businesses manage
                    payments. We combine deep technical know-how with a relentless drive for innovation, delivering
                    seamless, secure payment experiences tailored to a variety of industries.
                </p>
            </div>

        </div>
    </section>

    {{-- card section 1 --}}
    <section class="py-12 lg:py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            <!-- Left Content -->
            <div>
                <h3 class="text-2xl md:text-3xl lg:text-4xl font-bold leading-snug">
                    What is <span class="text-[#B30718]">graphic designing?</span>
                </h3>

                <p class="text-sm md:text-base text-gray-600 my-6 leading-relaxed">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>

                <x-button text="Read More" link="#" />
            </div>

            <!-- Right Section -->
            <div class="relative flex justify-center lg:justify-end">

                <!-- Background Blur Effect -->
                <div class="absolute -top-10 -right-10 w-72 h-72 bg-[#B30718]/10 rounded-full blur-3xl hidden sm:block">
                </div>

                <!-- Image Card -->
                <div class="relative bg-white p-4 rounded-2xl shadow-2xl max-w-md w-full">
                    <img src="{{ asset('images/fold.png') }}" alt="Graphic Designing"
                        class="rounded-xl w-full object-cover hover:scale-105 transition duration-500">
                </div>

                <!-- Floating Badge Top Left -->
                <div
                    class="absolute top-4 left-4 sm:top-6 sm:left-6 bg-[#B30718] text-white px-4 py-2 rounded-xl shadow-lg text-xs sm:text-sm font-semibold">
                    Creative Ideas
                </div>

                <!-- Floating Badge Bottom Right -->
                <div
                    class="absolute bottom-4 right-4 sm:bottom-6 sm:right-6 bg-black text-white px-4 py-2 rounded-xl shadow-lg text-xs sm:text-sm font-semibold">
                    Professional Design
                </div>

            </div>

        </div>
    </section>


    {{-- card section 2 --}}
    <section class="py-12 lg:py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            <!-- Left Content -->

            <div class="relative flex justify-center lg:justify-end">

                <!-- Background Blur Effect -->
                <div class="absolute -top-10 -right-10 w-72 h-72 bg-[#B30718]/10 rounded-full blur-3xl hidden sm:block">
                </div>

                <!-- Image Card -->
                <div class="grid grid-cols-2 gap-8">
                    <img src="{{ asset('images/Rectangle 1.png') }}" alt="" srcset="">
                    <img src="{{ asset('images/Rectangle 2.png') }}" alt="" srcset="">
                    <img src="{{ asset('images/Rectangle 3.png') }}" alt="">
                    <img src="{{ asset('images/Ellipse 4.png') }}" alt="">
                </div>

            </div>

            <!-- Right Section -->
            <div>
                <h3 class="text-2xl md:text-3xl lg:text-4xl font-bold leading-snug">
                    What is <span class="text-[#B30718]">graphic designing?</span>
                </h3>

                <p class="text-sm md:text-base text-gray-600 my-6 leading-relaxed">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>

                <x-button text="Read More" link="#" />
            </div>

        </div>
    </section>

    {{-- Counter Section --}}
    {{-- <section class="counter_section max-w-7xl mx-auto px-6 lg:px-8 py-20">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- Left Content -->
            <div data-aos="fade-right">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Who We Are?
                </h2>

                <p class="text-gray-600 leading-relaxed mb-8">
                    We empower businesses with innovative digital solutions.
                    Our expert team delivers scalable, high-performance products
                    that drive measurable success.
                </p>

                <x-button text="Read More" link="#" />
            </div>

            <!-- Right Counters -->
            <div class="grid grid-cols-2 gap-6">

                <!-- Card 1 -->
                <div data-aos="zoom-in"
                    class="bg-white rounded-2xl p-8 text-center
                shadow-[0_20px_50px_rgba(0,0,0,0.15)]
                hover:shadow-[0_30px_70px_rgba(0,0,0,0.25)]
                transition duration-500">

                    <!-- Icon -->
                    <div class="mb-4 text-[#E50913] flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" stroke="currentColor"
                            stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h18M5 7v13h14V7M9 11h6" />
                        </svg>
                    </div>

                    <h3 class="counter text-3xl md:text-4xl font-extrabold text-[#E50913] mb-2" data-target="1200">900</h3>

                    <p class="text-gray-600 font-medium">
                        Projects Done
                    </p>
                </div>

                <!-- Card 2 -->
                <div data-aos="zoom-in" data-aos-delay="150"
                    class="bg-white rounded-2xl p-8 text-center shadow-[0_20px_50px_rgba(0,0,0,0.15)] hover:shadow-[0_30px_70px_rgba(0,0,0,0.25)] transition duration-500">

                    <div class="mb-4 text-[#E50913] flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" stroke="currentColor"
                            stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5V4H2v16h5m10 0V10H7v10h10z" />
                        </svg>
                    </div>

                    <h3 class="counter text-3xl md:text-4xl font-extrabold text-[#1E9DEC] mb-2" data-target="250">0</h3>

                    <p class="text-gray-600 font-medium">
                        Happy Clients
                    </p>
                </div>

                <!-- Card 3 -->
                <div data-aos="zoom-in" data-aos-delay="300"
                    class="bg-white rounded-2xl p-8 text-center shadow-[0_20px_50px_rgba(0,0,0,0.15)] hover:shadow-[0_30px_70px_rgba(0,0,0,0.25)] transition duration-500">

                    <div class="mb-4 text-[#E50913] flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" stroke="currentColor"
                            stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
                        </svg>
                    </div>

                    <h3 class="counter text-3xl md:text-4xl font-extrabold text-[#EE11E7] mb-2" data-target="10">0</h3>

                    <p class="text-gray-600 font-medium">
                        Years Experience
                    </p>
                </div>

                <!-- Card 4 -->
                <div data-aos="zoom-in" data-aos-delay="450"
                    class="bg-white rounded-2xl p-8 text-center shadow-[0_20px_50px_rgba(0,0,0,0.15)] hover:shadow-[0_30px_70px_rgba(0,0,0,0.25)] transition duration-500">

                    <div class="mb-4 text-[#E50913] flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" stroke="currentColor"
                            stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16 14a4 4 0 10-8 0 4 4 0 008 0zM12 2v2M12 20v2" />
                        </svg>
                    </div>

                    <h3 class="counter text-3xl md:text-4xl font-extrabold text-[#F8921D] mb-2" data-target="90">0 %</h3>

                    <p class="text-gray-600 font-medium">
                        Growth rate
                    </p>
                </div>

            </div>

        </div>

    </section> --}}


    {{-- Team Section --}}
    {{-- <section>
        <div class="sub-title">
            <h3>Team</h3>
        </div>
        <h2 class="text-center font-extrabold text-3xl">
            Meet our Expert team
        </h2>


        <div class="container">
            <div class="employee-container">
                <div class="row justify-content-center">

                    <!-- 1 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="employee">
                            <div class="employee-image">
                                <img src="{{ asset('images/man-with-glasses-holding-blue-folder-with-books 1.png') }}"
                                    alt="">
                            </div>
                            <div class="employee-details">
                                <div class="employee-name">
                                    <h1>Benjamin<br><span>Developer</span></h1>
                                </div>
                                <div class="employee-social-link">
                                    <ul>
                                        <a href=""><li><i class="fa fa-facebook"></i></li></a>
                                        <li><i class="fa fa-twitter"></i></li>
                                        <li><i class="fa fa-linkedin"></i></li>
                                        <li><i class="fa fa-google-plus"></i></li>
                                        <li><i class="fa fa-behance"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="employee">
                            <div class="employee-image">
                                <img src="{{ asset('images/man-with-glasses-holding-blue-folder-with-books 1.png') }}"
                                    alt="">
                            </div>
                            <div class="employee-details">
                                <div class="employee-name">
                                    <h1>Jackson<br><span>Designer</span></h1>
                                </div>
                                <div class="employee-social-link">
                                    <ul>
                                        <li><i class="fa fa-facebook"></i></li>
                                        <li><i class="fa fa-twitter"></i></li>
                                        <li><i class="fa fa-linkedin"></i></li>
                                        <li><i class="fa fa-google-plus"></i></li>
                                        <li><i class="fa fa-behance"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 3 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="employee">
                            <div class="employee-image">
                                <img src="{{ asset('images/man-with-glasses-holding-blue-folder-with-books 1.png') }}"
                                    alt="">
                            </div>
                            <div class="employee-details">
                                <div class="employee-name">
                                    <h1>Franklin<br><span>Tester</span></h1>
                                </div>
                                <div class="employee-social-link">
                                    <ul>
                                        <li><i class="fa fa-facebook"></i></li>
                                        <li><i class="fa fa-twitter"></i></li>
                                        <li><i class="fa fa-linkedin"></i></li>
                                        <li><i class="fa fa-google-plus"></i></li>
                                        <li><i class="fa fa-behance"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 4 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="employee">
                            <div class="employee-image">
                                <img src="{{ asset('images/man-with-glasses-holding-blue-folder-with-books 1.png') }}"
                                    alt="">
                            </div>
                            <div class="employee-details">
                                <div class="employee-name">
                                    <h1>Michael<br><span>Manager</span></h1>
                                </div>
                                <div class="employee-social-link">
                                    <ul>
                                        <li><i class="fa fa-facebook"></i></li>
                                        <li><i class="fa fa-twitter"></i></li>
                                        <li><i class="fa fa-linkedin"></i></li>
                                        <li><i class="fa fa-google-plus"></i></li>
                                        <li><i class="fa fa-behance"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 5 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="employee">
                            <div class="employee-image">
                                <img src="{{ asset('images/man-with-glasses-holding-blue-folder-with-books 1.png') }}"
                                    alt="">
                            </div>
                            <div class="employee-details">
                                <div class="employee-name">
                                    <h1>David<br><span>SEO Expert</span></h1>
                                </div>
                                <div class="employee-social-link">
                                    <ul>
                                        <li><i class="fa fa-facebook"></i></li>
                                        <li><i class="fa fa-twitter"></i></li>
                                        <li><i class="fa fa-linkedin"></i></li>
                                        <li><i class="fa fa-google-plus"></i></li>
                                        <li><i class="fa fa-behance"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 6 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="employee">
                            <div class="employee-image">
                                <img src="{{ asset('images/man-with-glasses-holding-blue-folder-with-books 1.png') }}"
                                    alt="">
                            </div>
                            <div class="employee-details">
                                <div class="employee-name">
                                    <h1>Chris<br><span>Support</span></h1>
                                </div>
                                <div class="employee-social-link">
                                    <ul>
                                        <li><i class="fa fa-facebook"></i></li>
                                        <li><i class="fa fa-twitter"></i></li>
                                        <li><i class="fa fa-linkedin"></i></li>
                                        <li><i class="fa fa-google-plus"></i></li>
                                        <li><i class="fa fa-behance"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}

    {{-- Slider Section --}}
    <section x-data="testimonialSlider()" x-init="start()" @mouseenter="pause()" @mouseleave="start()"
        class="bg-gray-100 rounded-2xl p-8 lg:p-16 max-w-7xl mx-auto my-16 relative">

        <!-- Small Heading -->
        <p class="text-[#B30718] font-medium mb-4">Our Client</p>

        <!-- Title + Buttons -->
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between mb-14">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight max-w-3xl">
                <span class="text-[#B30718]">Our Client</span> loves Us because Our Quality Work.
            </h2>

            <!-- Buttons -->
            <div class="flex gap-4 mt-6 lg:mt-0">
                <button @click="prev()"
                    class="w-14 h-14 flex items-center justify-center rounded-full border border-[#B30718] text-[#B30718] hover:bg-indigo-50 transition">
                    ←
                </button>
                <button @click="next()"
                    class="w-14 h-14 flex items-center justify-center rounded-full bg-[#B30718] text-white hover:bg-[#B30718] transition">
                    →
                </button>
            </div>
        </div>

        <!-- SLIDER -->
        <div class="relative min-h-[420px]">

            <template x-for="(item, index) in testimonials" :key="index">
                <div x-show="active === index" x-transition.opacity.duration.600ms
                    class="absolute inset-0 grid lg:grid-cols-2 gap-12 items-center">

                    <!-- Image -->
                    <div class="relative flex justify-center lg:justify-start">
                        <div class="w-64 h-64 lg:w-72 lg:h-72 rounded-full overflow-hidden bg-gray-300">
                            <img :src="item.image" class="w-full h-full object-cover">
                        </div>

                        <!-- Quote -->
                        <div
                            class="absolute top-6 right-72 w-14 h-14 bg-[#B30718] text-white rounded-full flex items-center justify-center text-2xl shadow-lg">
                            ❝
                        </div>
                    </div>

                    <!-- Content -->
                    <div>
                        <h3 class="text-2xl font-semibold text-gray-900" x-text="item.name"></h3>
                        <p class="text-gray-500 mb-6" x-text="item.position"></p>

                        <p class="text-gray-600 leading-relaxed mb-8" x-text="item.message"></p>

                        <!-- Avatars -->
                        <div class="flex items-center -space-x-3">
                            <template x-for="avatar in item.avatars">
                                <img :src="avatar" class="w-10 h-10 rounded-full border-2 border-white">
                            </template>
                        </div>
                    </div>

                </div>
            </template>

        </div>

    </section>


    {{-- ================================== --}}
    <section class="bg-gray-50 py-16 px-5 md:px-10">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-center mb-12 text-gray-800">
                WHAT WE CAN DO FOR YOU?
            </h2>

            <div class="flex flex-wrap md:flex-nowrap gap-4 md:gap-5 justify-center items-stretch">

                <!-- Card 1 -->
                <div
                    class="group relative flex-1 min-w-[220px] md:min-w-[160px] lg:min-w-[140px]
                  transition-all duration-500 ease-out hover:flex-[3] hover:z-10">
                    <div class="relative h-80 md:h-96 lg:h-[420px] rounded-2xl overflow-hidden shadow-lg">

                        <!-- Image -->
                        <img src="{{ asset('images/Rectangle 34626265.png') }}" alt="Creative Design"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-700
                   group-hover:scale-110">

                        <!-- Overlay gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>

                        <!-- Content (always visible title + hidden description) -->
                        <div class="absolute inset-0 flex flex-col justify-end p-6 md:p-8 text-white">
                            <h3 class="text-xl md:text-2xl font-bold mb-2 drop-shadow-md">
                                Creative Design
                            </h3>
                            <p
                                class="text-sm md:text-base opacity-0 group-hover:opacity-100 translate-y-4
                      group-hover:translate-y-0 transition-all duration-500 delay-100">
                                We craft beautiful, modern and user-centered designs that make your brand stand out.
                            </p>
                        </div>

                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="group relative flex-1 min-w-[220px] md:min-w-[160px] lg:min-w-[140px]
                  transition-all duration-500 ease-out hover:flex-[3] hover:z-10">
                    <div class="relative h-80 md:h-96 lg:h-[420px] rounded-2xl overflow-hidden shadow-lg">

                        <img src="{{ asset('images/Rectangle 34626264.png') }}" alt="Web Development"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-700
                   group-hover:scale-110">

                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>

                        <div class="absolute inset-0 flex flex-col justify-end p-6 md:p-8 text-white">
                            <h3 class="text-xl md:text-2xl font-bold mb-2 drop-shadow-md">
                                Web Development
                            </h3>
                            <p
                                class="text-sm md:text-base opacity-0 group-hover:opacity-100 translate-y-4
                      group-hover:translate-y-0 transition-all duration-500 delay-100">
                                Fast, responsive and SEO-friendly websites built with modern technologies.
                            </p>
                        </div>

                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="group relative flex-1 min-w-[220px] md:min-w-[160px] lg:min-w-[140px]
                  transition-all duration-500 ease-out hover:flex-[3] hover:z-10">
                    <div class="relative h-80 md:h-96 lg:h-[420px] rounded-2xl overflow-hidden shadow-lg">

                        <img src="{{ asset('images/Rectangle 34626263.png') }}" alt="Digital Marketing"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-700
                   group-hover:scale-110">

                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>

                        <div class="absolute inset-0 flex flex-col justify-end p-6 md:p-8 text-white">
                            <h3 class="text-xl md:text-2xl font-bold mb-2 drop-shadow-md">
                                Digital Marketing
                            </h3>
                            <p
                                class="text-sm md:text-base opacity-0 group-hover:opacity-100 translate-y-4
                      group-hover:translate-y-0 transition-all duration-500 delay-100">
                                Data-driven strategies that increase reach, engagement and conversions.
                            </p>
                        </div>

                    </div>
                </div>
                <div
                    class="group relative flex-1 min-w-[220px] md:min-w-[160px] lg:min-w-[140px]
                  transition-all duration-500 ease-out hover:flex-[3] hover:z-10">
                    <div class="relative h-80 md:h-96 lg:h-[420px] rounded-2xl overflow-hidden shadow-lg">

                        <img src="{{ asset('images/Rectangle 34626265.png') }}" alt="Digital Marketing"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-700
                   group-hover:scale-110">

                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>

                        <div class="absolute inset-0 flex flex-col justify-end p-6 md:p-8 text-white">
                            <h3 class="text-xl md:text-2xl font-bold mb-2 drop-shadow-md">
                                Digital Marketing
                            </h3>
                            <p
                                class="text-sm md:text-base opacity-0 group-hover:opacity-100 translate-y-4
                      group-hover:translate-y-0 transition-all duration-500 delay-100">
                                Data-driven strategies that increase reach, engagement and conversions.
                            </p>
                        </div>

                    </div>
                </div>
                <div
                    class="group relative flex-1 min-w-[220px] md:min-w-[160px] lg:min-w-[140px]
                  transition-all duration-500 ease-out hover:flex-[3] hover:z-10">
                    <div class="relative h-80 md:h-96 lg:h-[420px] rounded-2xl overflow-hidden shadow-lg">

                        <img src="{{ asset('images/Rectangle 34626263.png') }}" alt="Digital Marketing"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-700
                   group-hover:scale-110">

                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>

                        <div class="absolute inset-0 flex flex-col justify-end p-6 md:p-8 text-white">
                            <h3 class="text-xl md:text-2xl font-bold mb-2 drop-shadow-md">
                                Digital Marketing
                            </h3>
                            <p
                                class="text-sm md:text-base opacity-0 group-hover:opacity-100 translate-y-4
                      group-hover:translate-y-0 transition-all duration-500 delay-100">
                                Data-driven strategies that increase reach, engagement and conversions.
                            </p>
                        </div>

                    </div>
                </div>

                <!-- Add more cards following the same pattern -->

            </div>
        </div>
    </section>

    {{-- Accordion FAQS --}}

    <section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-5">

    <!-- Title -->
    <h2 class="text-4xl md:text-5xl font-normal text-center mb-12">
      FAQs
    </h2>

    <div class="flex flex-col lg:flex-row gap-12">

      <!-- LEFT SIDE -->
      <div class="lg:w-[38%]">
        <h3 class="text-2xl font-normal mb-4">Need Help?</h3>

        <p class="text-gray-700 mb-4">
          If you have an issue or question that requires immediate assistance,
          you can click the button below to chat live with a Customer Service representative.
        </p>

        <p class="text-gray-700 mb-6">
          Please allow 06 - 12 business days from the time your package arrives back to us
          for a refund to be issued.
        </p>

        <div class="space-y-3">
          <a href="#"
             class="block w-full text-center border border-black rounded-md py-3 transition duration-300 hover:bg-black hover:text-white">
            Message Us
          </a>
          <a href="#"
             class="block w-full text-center border border-black rounded-md py-3 transition duration-300 hover:bg-black hover:text-white">
            Contact Us
          </a>
        </div>
      </div>

      <!-- RIGHT SIDE -->
      <div class="lg:w-[58%] lg:border-l lg:pl-10">
        <h3 class="text-2xl font-normal mb-6">Shopping Information</h3>

        <div class="space-y-4">

          <!-- FAQ ITEM -->
          <div class="faq-item border-b pb-4">
            <button class="faq-question w-full flex justify-between items-center py-3 text-left">
              <span class="text-lg text-black">
                Ut inventore dolorem hic tenetur accusamus
              </span>
              <span class="faq-icon text-2xl transition duration-300">+</span>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500">
              <div class="pt-4 text-gray-700 space-y-3">
                <p>Lorem ipsum dolor sit amet. Sit dignissimos officia et beatae quia qui veritatis consequatur et eaque eius non sequi accusamus sed quasi voluptatem est dolor laborum.</p>
                <p>Lorem ipsum dolor sit amet. Sit dignissimos officia et beatae quia qui veritatis consequatur.</p>
              </div>
            </div>
          </div>

          <!-- FAQ ITEM -->
          <div class="faq-item border-b pb-4">
            <button class="faq-question w-full flex justify-between items-center py-3 text-left">
              <span class="text-lg text-black">
                Et molestias quae est consequatur quos et eligendi iusto
              </span>
              <span class="faq-icon text-2xl transition duration-300">+</span>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500">
              <div class="pt-4 text-gray-700 space-y-3">
                <p>Lorem ipsum dolor sit amet. Sit dignissimos officia et beatae quia qui veritatis consequatur.</p>
                <p>Lorem ipsum dolor sit amet. Sit dignissimos officia et beatae quia qui veritatis consequatur et eaque eius non sequi accusamus.</p>
              </div>
            </div>
          </div>

          <!-- FAQ ITEM -->
          <div class="faq-item border-b pb-4">
            <button class="faq-question w-full flex justify-between items-center py-3 text-left">
              <span class="text-lg text-black">
                The most used version of Lorem Ipsum
              </span>
              <span class="faq-icon text-2xl transition duration-300">+</span>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500">
              <div class="pt-4 text-gray-700">
                <p>Quo natus nisi ea nostrum reiciendis non dolorum rerum est recusandae reiciendis. Qui sunt consectetur eos quisquam voluptate aut esse vitae aut veniam optio ut ducimus tenetur.</p>
              </div>
            </div>
          </div>

          <!-- FAQ ITEM -->
          <div class="faq-item border-b pb-4">
            <button class="faq-question w-full flex justify-between items-center py-3 text-left">
              <span class="text-lg text-black">
                Why do you use
              </span>
              <span class="faq-icon text-2xl transition duration-300">+</span>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500">
              <div class="pt-4 text-gray-700">
                <p>Lorem ipsum dolor sit amet. Sit dignissimos officia et beatae quia qui veritatis consequatur et eaque eius non sequi accusamus.</p>
              </div>
            </div>
          </div>

          <!-- FAQ ITEM -->
          <div class="faq-item border-b pb-4">
            <button class="faq-question w-full flex justify-between items-center py-3 text-left">
              <span class="text-lg text-black">
                Ut inventore dolorem hic tenetur accusamus
              </span>
              <span class="faq-icon text-2xl transition duration-300">+</span>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500">
              <div class="pt-4 text-gray-700 space-y-3">
                <p>Lorem ipsum dolor sit amet. Sit dignissimos officia et beatae quia qui veritatis consequatur.</p>
                <p>Lorem ipsum dolor sit amet. Sit dignissimos officia et beatae quia qui veritatis consequatur et eaque eius non sequi accusamus.</p>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>


    {{-- Slider Javascript --}}
    <script>
        function testimonialSlider() {
            return {
                active: 0,
                timer: null,

                testimonials: [{
                        name: "Julia Roberts",
                        position: "Product and Sales Manager",
                        image: "https://images.unsplash.com/photo-1614283233556-f35b0c801ef1?q=80&w=800",
                        message: "During the purchase process, any questions were met with swift assistance. Their dedication to quality and customer satisfaction is truly outstanding.",
                        avatars: [
                            "https://randomuser.me/api/portraits/women/44.jpg",
                            "https://randomuser.me/api/portraits/men/32.jpg",
                            "https://randomuser.me/api/portraits/women/68.jpg"
                        ]
                    },
                    {
                        name: "Michael Brown",
                        position: "Marketing Director",
                        image: "{{ asset('images/Rectangle 34626264.png') }}",
                        message: "Amazing service and outstanding support. The entire experience was smooth and professional from start to finish.",
                        avatars: [
                            "https://randomuser.me/api/portraits/men/11.jpg",
                            "https://randomuser.me/api/portraits/women/21.jpg",
                            "https://randomuser.me/api/portraits/men/45.jpg"
                        ]
                    },
                    {
                        name: "Julia Roberts",
                        position: "Product and Sales Manager",
                        image: "{{ asset('images/Rectangle 34626265.png') }}",
                        message: "During the purchase process, any questions were met with swift assistance. Their dedication to quality and customer satisfaction is truly outstanding.",
                        avatars: [
                            "https://randomuser.me/api/portraits/women/44.jpg",
                            "https://randomuser.me/api/portraits/men/32.jpg",
                            "https://randomuser.me/api/portraits/women/68.jpg"
                        ]
                    },
                    {
                        name: "Michael Brown",
                        position: "Marketing Director",
                        image: "{{ asset('images/Rectangle 34626263.png') }}",
                        message: "Amazing service and outstanding support. The entire experience was smooth and professional from start to finish.",
                        avatars: [
                            "https://randomuser.me/api/portraits/men/11.jpg",
                            "https://randomuser.me/api/portraits/women/21.jpg",
                            "https://randomuser.me/api/portraits/men/45.jpg"
                        ]
                    },
                ],

                next() {
                    this.active = (this.active + 1) % this.testimonials.length;
                },

                prev() {
                    this.active = (this.active - 1 + this.testimonials.length) % this.testimonials.length;
                },

                start() {
                    this.timer = setInterval(() => {
                        this.next();
                    }, 5000);
                },

                pause() {
                    clearInterval(this.timer);
                }
            }
        }

        // Accordion Js
        const items = document.querySelectorAll(".faq-item");

  items.forEach(item => {
    const button = item.querySelector(".faq-question");
    const answer = item.querySelector(".faq-answer");
    const icon = item.querySelector(".faq-icon");

    button.addEventListener("click", () => {

      items.forEach(other => {
        if (other !== item) {
          other.querySelector(".faq-answer").style.maxHeight = null;
          other.querySelector(".faq-icon").textContent = "+";
        }
      });

      if (answer.style.maxHeight) {
        answer.style.maxHeight = null;
        icon.textContent = "+";
      } else {
        answer.style.maxHeight = answer.scrollHeight + "px";
        icon.textContent = "−";
      }

    });
  });
    </script>



    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
@endsection
