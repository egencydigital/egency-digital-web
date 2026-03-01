<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        [x-cloak] {
            display: none !important;
        }

        .sub-title h3 {
            font-family: "Poppins", serif;
            font-size: 34px;
            font-weight: 600;
            text-align: center;
            color: #E50913;
            margin-bottom: 20px;
            padding-bottom: 20px;
            margin-top: 20px;
            position: relative;
        }

        .sub-title h3::before {
            content: "";
            position: absolute;
            width: 167px;
            height: 1px;
            background: #444444;
            display: block;
            left: 0;
            right: 0;
            bottom: 1px;
            margin: auto;
        }

        .sub-title h3::after {
            content: "";
            position: absolute;
            background: #E50913;
            display: block;
            width: 67px;
            height: 3px;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
        }
    </style>
</head>

<body class="bg-gray-50 overflow-x-hidden">
    <div id="preloader" class="fixed inset-0 bg-white flex items-center justify-center z-50">

    {{-- <svg width="80" height="80" viewBox="0 0 100 100" fill="none">
        <circle cx="50" cy="50" r="40" stroke="#111827" stroke-width="8"
                stroke-dasharray="188"
                stroke-dashoffset="0">
            <animateTransform
                attributeName="transform"
                type="rotate"
                from="0 50 50"
                to="360 50 50"
                dur="1s"
                repeatCount="indefinite"/>
        </circle>
    </svg> --}}
    <img src="{{ asset('images/Infinity@1x-2.0s-200px-200px.svg') }}" alt="" srcset="">

</div>

    <div x-data="{ activeMega: null, mobileOpen: false, mobileDropdown: null }" id="content" style="display: none;">

        {{-- HEADER --}}
        @include('frontend.layout.header')

        {{-- MAIN CONTENT --}}
        @yield('body')

        {{-- FOOTER --}}
        @include('frontend.layout.footer')

    </div>
</body>


{{-- Preloader --}}
<script>
    window.addEventListener("load", function (){
        setTimeout(function (){
            document.getElementById("preloader").style.display = "none";
            document.getElementById("content").style.display = "block";

        }, 0);
    });
</script>

{{-- Counter Js About Us page --}}
<script>
document.addEventListener("DOMContentLoaded", function () {

    const counters = document.querySelectorAll('.counter');
    const speed = 2000;

    const startCounter = (counter) => {
        const target = +counter.getAttribute('data-target');
        const increment = target / speed;

        const updateCount = () => {
            const count = +counter.innerText;

            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 10);
            } else {
                counter.innerText = target + "+";
            }
        };

        updateCount();
    };

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                startCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => {
        observer.observe(counter);
    });

});
</script>

</html>
