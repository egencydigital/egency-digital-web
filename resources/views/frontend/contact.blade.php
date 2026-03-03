@extends('frontend.layout.layout')

@section('title')
    Egency Digital - Contact Us
@endsection

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

@section('body')
    <!-- ================= HERO SECTION ================= -->
    <section class="relative pt-18 pb-16 overflow-hidden"
        style="background: url('images/contact-image.png'); object-fit: cover; background-repeat: no-repeat;">

        <!-- Decorative Arrows Left -->
        {{-- <div class="absolute left-10 top-16 opacity-20 hidden md:block">
        <div class="flex gap-2">
            <span class="w-6 h-6 border-t-2 border-r-2 border-gray-600 rotate-45"></span>
            <span class="w-6 h-6 border-t-2 border-r-2 border-gray-600 rotate-45"></span>
            <span class="w-6 h-6 border-t-2 border-r-2 border-gray-600 rotate-45"></span>
        </div>
    </div>

    <!-- Decorative Arrows Right -->
    <div class="absolute right-10 bottom-16 opacity-20 hidden md:block">
        <div class="flex gap-2">
            <span class="w-6 h-6 border-t-2 border-r-2 border-gray-600 rotate-45"></span>
            <span class="w-6 h-6 border-t-2 border-r-2 border-gray-600 rotate-45"></span>
            <span class="w-6 h-6 border-t-2 border-r-2 border-gray-600 rotate-45"></span>
        </div>
    </div> --}}

        <!-- Hero Content -->
        <div class="max-w-4xl mx-auto text-center px-6">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Contact Us
            </h1>
            {{-- <p class="text-[#f5f5f5] text-sm md:text-base max-w-2xl mx-auto">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore.
        </p> --}}
        </div>

    </section>


    <!-- ================= LOGO STRIP (OVERLAP STYLE) ================= -->
    <section class="relative -mt-16 z-10">
        <div class="max-w-5xl mx-auto bg-white rounded-2xl shadow-md py-6 px-8">

            <div class="flex flex-wrap items-center justify-center gap-8 opacity-70">

                <img src="{{ asset('images/2.png') }}" class="h-10 object-contain" alt="logo">
                <img src="{{ asset('images/3.png') }}" class="h-10 object-contain" alt="logo">
                <img src="{{ asset('images/4.png') }}" class="h-10 object-contain" alt="logo">
                <img src="{{ asset('images/5.png') }}" class="h-10 object-contain" alt="logo">

            </div>

        </div>
    </section>


    <!-- ================= CONTACT + NEWSLETTER ================= -->
    <section class="py-16 bg-[#FFFFFF]">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="grid lg:grid-cols-3 gap-12">

                <!-- CONTACT FORM -->
                <div class="lg:col-span-2 border-8 rounded-2xl   border-[#F7F7F8] p-12">
                    <form class="space-y-6" id="submitForm">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-6">
                            <input type="text" name="name" placeholder="First Name"
                                class="w-full bg-[#F7F7F8] rounded-full px-6 py-3 outline-none focus:ring-2 focus:ring-[#cc0710]">

                            <input type="text" placeholder="Phone" name="phone"
                                class="w-full bg-[#F7F7F8] rounded-full px-6 py-3 outline-none focus:ring-2 focus:ring-[#cc0710]">
                        </div>

                        <input type="email" placeholder="Email" name="email"
                            class="w-full bg-[#F7F7F8] rounded-full px-6 py-3 outline-none focus:ring-2 focus:ring-[#cc0710]">

                        <textarea rows="5" placeholder="Message" name="message"
                            class="w-full bg-[#F7F7F8] rounded-2xl px-6 py-4 outline-none focus:ring-2 focus:ring-[#cc0710]"></textarea>

                        <button type="submit" class="bg-[#E50913] text-white px-8 py-3 rounded-full hover:bg-[#4c7779] transition">
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


    <!-- ================= CONTACT INFO CARDS ================= -->
    <section class="pb-16">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-6">

                <!-- PHONE -->
                <div class="bg-[#fff] rounded-2xl p-6 flex items-start gap-4">
                    <div class="bg-[#E50913] p-3 rounded-full shadow-sm text-xl"><i class="fa-solid fa-phone text-white"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-lg">(+876) 766 665</h4>
                        <p class="text-sm text-gray-600">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                </div>

                <!-- EMAIL -->
                <div class="bg-white rounded-2xl p-6 flex items-start gap-4 shadow-sm">
                    <div class="bg-[#E50913] p-3 rounded-full text-xl"><i class="fa-solid fa-envelope text-white"></i></div>
                    <div>
                        <h4 class="font-semibold text-lg">mail@influenca.id</h4>
                        <p class="text-sm text-gray-600">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                </div>

                <!-- LOCATION -->
                <div class="bg-white rounded-2xl p-6 flex items-start gap-4 shadow-sm">
                    <div class="bg-[#E50913] p-3 rounded-full text-xl"><i class="fa-solid fa-location-dot text-white"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-lg">London Eye London</h4>
                        <p class="text-sm text-gray-600">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ================= GOOGLE MAP ================= -->
    <section class="pb-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="rounded-2xl overflow-hidden shadow-lg">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404.453056856251!2d73.06500317429938!3d31.42919205164347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x392242a895a55ca9%3A0x8d71fff8c03f335!2sC3H9%2BM2G%2C%20Faisalabad%2C%20Pakistan!5e0!3m2!1sen!2s!4v1772042799805!5m2!1sen!2s"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>

            </div>
        </div>
    </section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function(){

    $('#submitForm').on('submit', function(e){
        e.preventDefault();

        let form = $(this);
        let formData = form.serialize();
        let button = form.find('button');

        button.prop('disabled', true).text('Sending...');

        $.ajax({
            url: "{{ route('user.message') }}",
            type: "POST",
            data: formData,

            success: function(response){

                button.prop('disabled', false).text('Submit Button');

                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: response.message,
                    confirmButtonColor: '#E50913'
                });

                form[0].reset();
            },

            error: function(xhr){

                button.prop('disabled', false).text('Submit Button');

                if(xhr.status === 422){

                    let errors = xhr.responseJSON.errors;
                    let errorMessage = "";

                    $.each(errors, function(key, value){
                        errorMessage += value[0] + "<br>";
                    });

                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Error',
                        html: errorMessage,
                        confirmButtonColor: '#E50913'
                    });

                } else {

                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                        confirmButtonColor: '#E50913'
                    });

                }
            }
        });

    });

});
</script>

@endsection
