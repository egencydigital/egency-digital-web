@extends('backend.sidebar')

@section('body')
    <div class="min-h-screen bg-gradient-to-br from-white via-white to-white p-8">

        <!-- Header -->
        <div class="max-w-3xl mx-auto mb-8">
            <div class="flex items-center gap-3 mb-1">
                <div class="h-8 w-1 bg-[#E50913] rounded-full"></div>
                <p class="text-black text-sm font-medium uppercase tracking-widest">Blog Management</p>
            </div>
            <h1 class="text-4xl font-bold text-black ml-4">
                {{ isset($blog) ? 'Edit Blog' : 'Add Blog' }}
            </h1>
        </div>

        <!-- Card -->
        <form id="submitForm" enctype="multipart/form-data" data-id="{{ $blog->id ?? '' }}"
            class="max-w-3xl mx-auto bg-white backdrop-blur-sm border border-slate-700/50 rounded-2xl p-8 shadow-2xl space-y-7">
            @csrf

            <!-- Top: Avatar Upload + Name/Role -->
            <div class="flex flex-col md:flex-row gap-6 items-start">

                <!-- Avatar Upload -->
                <div class="flex flex-col items-center gap-2 shrink-0">
                    <div class="relative group cursor-pointer">
                        <div id="avatar-preview"
                            class="w-28 h-28 rounded-2xl bg-white border-2 border-dashed border-slate-500 group-hover:border-[#E50913] transition-all duration-300 flex items-center justify-center overflow-hidden">
                            @if (isset($blog))
                                <img src="{{ asset('storage/' . $blog->image) }}" class="w-full h-full object-cover"
                                    alt="Avatar">
                            @else
                                <svg class="w-10 h-10 text-slate-500 group-hover:text-[#E50913] transition" fill="none"
                                    stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                            @endif

                        </div>
                        <label for="image"
                            class="absolute -bottom-2 -right-2 bg-[#E50913] hover:bg-[#cc0710] text-white rounded-lg p-1.5 cursor-pointer shadow-lg transition">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </label>
                        <input type="file" name="image" id="image" accept="image/*" class="hidden"
                            onchange="previewImage(event)">
                    </div>
                    <p class="text-slate-500 text-xs text-center">JPG, PNG, WEBP<br>Max 2MB</p>
                    @error('image')
                        <p class="text-red-400 text-xs">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Name + Role -->
                <div class="flex-1 space-y-5 w-full">
                    <!-- Name -->
                    <div class="group">
                        <label for="title"
                            class="block text-xs font-semibold text-slate-400 uppercase tracking-widest mb-2">Title</label>
                        <input type="text" name="title" id="title" placeholder="e.g. Sarah Johnson" value="{{ old('title', $blog->title ?? "") }}"
                            class="w-full bg-white border border-slate-600 text-black placeholder-slate-500 rounded-xl px-4 py-3 focus:outline-none focus:border-[#E50913] focus:ring-2 focus:ring-[#E50913]/20 transition-all duration-200">
                        @error('name')
                            <p class="text-red-400 text-xs mt-1.5">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Role -->
                    <div>
                        <label for="role"
                            class="block text-xs font-semibold text-slate-400 uppercase tracking-widest mb-2">Status</label>
                        <div class="relative">
                            <select name="status" id="status"
                                class="w-full appearance-none bg-white border border-slate-600 text-black rounded-xl px-4 py-3 focus:outline-none focus:border-[#E50913] focus:ring-2 focus:ring-[#E50913]/20 transition-all duration-200 cursor-pointer">
                                <option value="" class="bg-slate-800 text-white">Select Status</option>
                                <option value="publish"
                                {{ old('status', $blog->status ?? "") == "publish" ? 'selected' : "" }}
                                 class="bg-slate-800 text-white">Publish</option>
                                <option value="draft"
                                    {{ old('status', $blog->status ?? "") == 'draft' ? 'selected' : '' }}
                                class="bg-slate-800 text-white">Draft</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                        @error('status')
                            <p class="text-red-400 text-xs mt-1.5">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Divider -->
            <div class="border-t border-slate-700/60"></div>


            <div class="group">
                <label for="type"
                    class="block text-xs font-semibold text-slate-400 uppercase tracking-widest mb-2">Type </label>
                <input type="text" name="type" id="type" placeholder="e.g. Sarah Johnson" value="{{ old('type', $blog->type ?? '') }}"
                    class="w-full bg-white border border-slate-600 text-black placeholder-slate-500 rounded-xl px-4 py-3 focus:outline-none focus:border-[#E50913] focus:ring-2 focus:ring-[#E50913]/20 transition-all duration-200">
                @error('name')
                    <p class="text-red-400 text-xs mt-1.5">{{ $message }}</p>
                @enderror
            </div>
            <!-- Divider -->
            <div class="border-t border-slate-700/60"></div>

            <!-- Description -->
            <div>
                <label for="description"
                    class="block text-xs font-semibold text-slate-400 uppercase tracking-widest mb-2">Bio /
                    Description</label>
                <textarea name="description" id="description" rows="4"
                    placeholder="Write a short bio or description about this team member..."
                    class="w-full bg-white border border-slate-600 text-black placeholder-slate-500 rounded-xl px-4 py-3 focus:outline-none focus:border-[#E50913] focus:ring-2 focus:ring-[#E50913]/20 transition-all duration-200 resize-none">{{ old('description', $blog->description ?? '' ) }}</textarea>
                @error('description')
                    <p class="text-red-400 text-xs mt-1.5">{{ $message }}</p>
                @enderror
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-between pt-2">
                <a href="{{ url('/blogPage') }}"
                    class="text-slate-400 hover:text-black text-sm transition-colors duration-200 flex items-center gap-1.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                    Cancel
                </a>
                <button type="submit"
                    class="inline-flex items-center gap-2 bg-[#E50913] hover:bg-[#cc0710] active:scale-95 text-white font-semibold px-7 py-3 rounded-xl shadow-lg shadow-[#E50913]/20 transition-all duration-200">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    {{ isset($member) ? 'Update Blog' : 'Add Blog' }}
                </button>
            </div>

        </form>
    </div>

    <!-- Image Preview Script -->
    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            if (!file) return;
            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = document.getElementById('avatar-preview');
                preview.innerHTML = `<img src="${e.target.result}" class="w-full h-full object-cover" alt="Preview">`;
            };
            reader.readAsDataURL(file);
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {

            $('#submitForm').on('submit', function(e) {
                e.preventDefault();

                let form = $(this);
                let memberId = form.data('id'); // get ID for edit
                let button = form.find('button[type="submit"]');

                let formData = new FormData(this);

                button.prop('disabled', true).text(memberId ? 'Updating...' : 'Processing...');

                // Set correct URL depending on add/update
                let url = memberId ? '/createBlog/' + memberId : '{{ route('createBlog') }}';
                let type = 'POST'; // for Laravel POST handles both add/update

                $.ajax({
                    url: url,
                    type: type,
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {

                        button.prop('disabled', false).text(memberId ? 'Update Blog' :
                            'Add Blog');

                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: response.message,
                            confirmButtonColor: '#E50913'
                        }).then(() => {
                            // Redirect to team page after OK
                            window.location.href = '/blogPage';
                        });


                        // Reset form only if it was an add
                        if (!memberId) {
                            form[0].reset();
                            $('#avatar-preview').html(
                                `<svg class="w-10 h-10 text-slate-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" /></svg>`
                            );
                        }

                        // Optional: Update table dynamically (if you want)
                        // You can append the new row or update existing row here
                    },
                    error: function(xhr) {
                        button.prop('disabled', false).text(memberId ? 'Update Blog' :
                            'Add Blog');

                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;
                            let errorMessage = "";
                            $.each(errors, function(key, value) {
                                errorMessage += value[0] + "<br>";
                            });

                            Swal.fire({
                                icon: 'error',
                                title: 'Validation Error',
                                html: errorMessage,
                                confirmButtonColor: '#E50913'
                            });
                        } else {
                            console.log(xhr.responseText);
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
