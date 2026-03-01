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

    .employee-container {
        margin-top: 80px;
    }

    .employee {
        width: 100%;
        background-color: black;
        margin: 15px auto;
        overflow: hidden;
        height: 400px;
        border-radius: 10px;
        box-shadow: 0px 0px 31px -19px rgba(0, 0, 0, 0.75);
        position: relative;
    }

    .employee-image {
        background-color: #fff;
        height: 400px;
        width: 100%;
        transition: 0.5s;
    }

    .employee:hover .employee-image {
        margin-top: -100px;
    }

    .employee-image img {
        height: 100%;
        width: auto;
        display: block;
        margin: auto;
    }

    .employee-details {
        position: absolute;
        width: 100%;
        bottom: 0;
        text-align: center;
    }

    .employee-name {
        color: #fff;
        font-weight: bold;
    }

    .employee-name h1 {
        font-size: 22px;
    }

    .employee-name span {
        font-size: 16px;
        color: yellow;
    }

    .employee-social-link ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .employee-social-link ul li {
        display: inline-block;
        margin: 7px;
        background-color: #000;
        padding: 10px;
        border-radius: 50%;
        transform: translateY(120px);
        transition: 0.6s;
    }

    .employee-social-link i {
        font-size: 15px;
        color: #fff;
    }

    /* Stagger animation */
    .employee-social-link ul li:nth-child(1) {
        transition-delay: 0.1s;
    }

    .employee-social-link ul li:nth-child(2) {
        transition-delay: 0.2s;
    }

    .employee-social-link ul li:nth-child(3) {
        transition-delay: 0.3s;
    }

    .employee-social-link ul li:nth-child(4) {
        transition-delay: 0.4s;
    }

    .employee-social-link ul li:nth-child(5) {
        transition-delay: 0.5s;
    }

    .employee:hover .employee-social-link ul li {
        transform: translateY(-140px);
    }
</style>
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<!-- Bootstrap -->
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



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

    {{-- Counter Section --}}

    <section class="counter_section max-w-7xl mx-auto px-6 lg:px-8 py-20">

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

    </section>


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
            <img src="{{ asset('images/man-with-glasses-holding-blue-folder-with-books 1.png') }}" alt="">
          </div>
          <div class="employee-details">
            <div class="employee-name">
              <h1>Benjamin<br><span>Developer</span></h1>
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

      <!-- 2 -->
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="employee">
          <div class="employee-image">
            <img src="{{ asset('images/man-with-glasses-holding-blue-folder-with-books 1.png') }}" alt="">
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
            <img src="{{ asset('images/man-with-glasses-holding-blue-folder-with-books 1.png') }}" alt="">
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
            <img src="{{ asset('images/man-with-glasses-holding-blue-folder-with-books 1.png') }}" alt="">
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
            <img src="{{ asset('images/man-with-glasses-holding-blue-folder-with-books 1.png') }}" alt="">
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
            <img src="{{ asset('images/man-with-glasses-holding-blue-folder-with-books 1.png') }}" alt="">
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

    {{-- Team Section --}}
    <section>
        <div class="sub-title">
            <h3>Team</h3>
        </div>
        <h2 class="text-center font-extrabold text-3xl">
            Meet our Expert team
        </h2>


        <div class="max-w-7xl mx-auto py-4 grid grid-cols-4 gap-8">
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
    </section>




    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
@endsection
