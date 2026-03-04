@extends('backend.sidebar')

@section('body')
    <div class="min-h-screen bg-gradient-to-br from-white via-white to-white p-8">

        <!-- Header -->
        <div class="max-w-3xl mx-auto mb-8">
            <div class="flex items-center gap-3 mb-1">
                <div class="h-8 w-1 bg-[#E50913] rounded-full"></div>
                <p class="text-black text-sm font-medium uppercase tracking-widest">Team Management</p>
            </div>
            <h1 class="text-4xl font-bold text-black ml-4">
                {{ isset($member) ? 'Edit Team Member' : 'Add Team Member' }}
            </h1>
        </div>

        <!-- Card -->
        <form id="submitForm" enctype="multipart/form-data" data-id="{{ $member->id ?? '' }}"
            class="max-w-3xl mx-auto bg-white backdrop-blur-sm border border-slate-700/50 rounded-2xl p-8 shadow-2xl space-y-7">
            @csrf

            <!-- Top: Avatar Upload + Name/Role -->
            <div class="flex flex-col md:flex-row gap-6 items-start">

                <!-- Avatar Upload -->
                <div class="flex flex-col items-center gap-2 shrink-0">
                    <div class="relative group cursor-pointer">
                        <div id="avatar-preview"
                            class="w-28 h-28 rounded-2xl bg-white border-2 border-dashed border-slate-500 group-hover:border-[#E50913] transition-all duration-300 flex items-center justify-center overflow-hidden">
                            @if (isset($member))
                                <img src="{{ asset('storage/' . $member->picture) }}" class="w-full h-full object-cover"
                                    alt="Avatar">
                            @else
                                <svg class="w-10 h-10 text-slate-500 group-hover:text-[#E50913] transition" fill="none"
                                    stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                            @endif

                        </div>
                        <label for="picture"
                            class="absolute -bottom-2 -right-2 bg-[#E50913] hover:bg-[#cc0710] text-white rounded-lg p-1.5 cursor-pointer shadow-lg transition">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </label>
                        <input type="file" name="picture" id="picture" accept="image/*" class="hidden"
                            onchange="previewImage(event)">
                    </div>
                    <p class="text-slate-500 text-xs text-center">JPG, PNG, WEBP<br>Max 2MB</p>
                    @error('picture')
                        <p class="text-red-400 text-xs">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Name + Role -->
                <div class="flex-1 space-y-5 w-full">
                    <!-- Name -->
                    <div class="group">
                        <label for="name"
                            class="block text-xs font-semibold text-slate-400 uppercase tracking-widest mb-2">Full
                            Name</label>
                        <input type="text" name="name" id="name" placeholder="e.g. Sarah Johnson"
                            value="{{ old('name', $member->name ?? '') }}"
                            class="w-full bg-white border border-slate-600 text-black placeholder-slate-500 rounded-xl px-4 py-3 focus:outline-none focus:border-[#E50913] focus:ring-2 focus:ring-[#E50913]/20 transition-all duration-200">
                        @error('name')
                            <p class="text-red-400 text-xs mt-1.5">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Role -->
                    <div>
                        <label for="role"
                            class="block text-xs font-semibold text-slate-400 uppercase tracking-widest mb-2">Role</label>
                        <div class="relative">
                            <select name="role" id="role"
                                class="w-full appearance-none bg-white border border-slate-600 text-black rounded-xl px-4 py-3 focus:outline-none focus:border-[#E50913] focus:ring-2 focus:ring-[#E50913]/20 transition-all duration-200 cursor-pointer">
                                <option value="" class="bg-slate-800 text-white">Select Role</option>
                                <option value="developer"
                                    {{ old('role', $member->role ?? '') == 'developer' ? 'selected' : '' }}
                                    class="bg-slate-800 text-white">Developer</option>
                                <option value="designer"
                                    {{ old('role', $member->role ?? '') == 'designer' ? 'selected' : '' }}
                                    class="bg-slate-800 text-white">Designer</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                        @error('role')
                            <p class="text-red-400 text-xs mt-1.5">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Divider -->
            <div class="border-t border-slate-700/60"></div>

            <!-- Social Links -->
            <div>
                <label class="block text-xs font-semibold text-slate-400 uppercase tracking-widest mb-3">Social
                    Links</label>
                <div class="grid md:grid-cols-3 gap-4">

                    <!-- Facebook -->
                    <div class="relative">
                        <span class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                            <svg class="w-4 h-4 text-[#1877F2]" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073C24 5.405 18.627 0 12 0S0 5.405 0 12.073C0 18.1 4.388 23.094 10.125 24v-8.437H7.078v-3.49h3.047V9.41c0-3.025 1.792-4.697 4.533-4.697 1.312 0 2.686.236 2.686.236v2.97h-1.513c-1.491 0-1.956.93-1.956 1.886v2.267h3.328l-.532 3.49h-2.796V24C19.612 23.094 24 18.1 24 12.073z" />
                            </svg>
                        </span>
                        <input type="url" name="socialLinks[facebook]" placeholder="Facebook URL"
                            value="{{ old('socialLinks.facebook', $member->socialLinks['facebook'] ?? '') }}"
                            class="w-full bg-white border border-slate-600 text-black placeholder-slate-500 rounded-xl pl-10 pr-4 py-3 focus:outline-none focus:border-[#E50913] focus:ring-2 focus:ring-[#E50913]/20 transition-all duration-200 text-sm">
                    </div>

                    <!-- Instagram -->
                    <div class="relative">
                        <span class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                             <svg class="w-4 h-4 text-[#E1306C]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                        </span>
                        <input type="url" name="socialLinks[instagram]" placeholder="Instagram URL"
                            value="{{ old('socialLinks.instagram', $member->socialLinks['instagram'] ?? '') }}"
                            class="w-full bg-white border border-slate-600 text-black placeholder-slate-500 rounded-xl pl-10 pr-4 py-3 focus:outline-none focus:border-[#E50913] focus:ring-2 focus:ring-[#E50913]/20 transition-all duration-200 text-sm">
                    </div>

                    <!-- LinkedIn -->
                    <div class="relative">
                        <span class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                            <svg class="w-4 h-4 text-[#0A66C2]" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </span>
                        <input type="url" name="socialLinks[linkedin]" placeholder="LinkedIn URL"
                            value="{{ old('socialLinks.linkedin', $member->socialLinks['linkedin'] ?? '') }}"
                            class="w-full bg-white 50 border border-slate-600 text-black placeholder-slate-500 rounded-xl pl-10 pr-4 py-3 focus:outline-none focus:border-[#E50913] focus:ring-2 focus:ring-[#E50913]/20 transition-all duration-200 text-sm">
                    </div>

                </div>
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
                    class="w-full bg-white border border-slate-600 text-black placeholder-slate-500 rounded-xl px-4 py-3 focus:outline-none focus:border-[#E50913] focus:ring-2 focus:ring-[#E50913]/20 transition-all duration-200 resize-none">{{ old('description', $member->description ?? '') }}</textarea>
                @error('description')
                    <p class="text-red-400 text-xs mt-1.5">{{ $message }}</p>
                @enderror
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-between pt-2">
                <a href="{{ url('/teams') }}"
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
                    {{ isset($member) ? 'Update Team Member' : 'Add Team Member' }}
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
                let url = memberId ? '/createTeam/' + memberId : '{{ route('createTeam') }}';
                let type = 'POST'; // for Laravel POST handles both add/update

                $.ajax({
                    url: url,
                    type: type,
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {

                        button.prop('disabled', false).text(memberId ? 'Update Team Member' :
                            'Add Team Member');

                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: response.message,
                            confirmButtonColor: '#E50913'
                        }).then(() => {
                            // Redirect to team page after OK
                            window.location.href = '/teams';
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
                        button.prop('disabled', false).text(memberId ? 'Update Team Member' :
                            'Add Team Member');

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
