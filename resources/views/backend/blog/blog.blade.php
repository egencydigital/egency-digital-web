@extends('backend.sidebar')

@section('body')
    <div class="min-h-screen bg-white p-8">

        <div class="max-w-7xl mx-auto">
            <div class="flex justify-between align-middle text-center my-4">
                <h1 class="text-3xl font-bold text-black mb-6">Blogs</h1>
                <a href="{{ url('/blogFormPage') }}"
                    class="inline-flex items-center gap-2 bg-[#E50913] hover:bg-[#cc0710] active:scale-95 text-white font-semibold px-7 py-3 rounded-xl shadow-lg shadow-[#E50913]/20 transition-all duration-200">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Add Blog
                </a>

            </div>
            <div class="bg-white backdrop-blur-md border border-slate-700 rounded-2xl p-6 shadow-xl">

                <table id="teamTable" class="display w-full text-black">
                    <thead>
                        <tr class="text-left text-black uppercase text-xs tracking-wider">
                            <th>#</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blog as $key => $member)
                            <tr class="border-b border-slate-700">
                                <td>{{ $key + 1 }}</td>

                                <td>
                                    <img src="{{ asset('storage/' . $member->image) }}"
                                        class="w-12 h-12 rounded-lg object-cover">
                                </td>

                                <td>{{ $member->title }}</td>
                                {{-- <td>{{ ucfirst($member->status) }}</td> --}}

                                <td>
                                    @if ($member->status == 'publish')
                                        <span class="bg-blue-600 px-3 py-1 rounded text-xs text-white">
                                            {{ $member->status }}
                                        </span>

                                    @elseif ($member->status == 'draft')
                                        <span class="bg-red-600 px-3 py-1 rounded text-xs text-white">
                                            {{ $member->status }}
                                        </span>
                                    @endif
                                </td>
                                <td>{{ $member->type }}</td>

                                <td class="text-sm text-mauve-900">
                                    {{ Str::limit($member->description, 50) }}
                                </td>

                                <td>
                                    <!-- Use class 'delete-btn' for all delete buttons -->
                                    <button data-id="{{ $member->id }}"
                                        class="edit-btn bg-blue-600 hover:bg-red-700 px-3 py-1 rounded text-xs">
                                        Edit
                                    </button>
                                    <button data-id="{{ $member->id }}"
                                        class="delete-btn bg-red-600 hover:bg-red-700 px-3 py-1 rounded text-xs">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

    </div>

    <!-- DataTables CSS + JS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            // Initialize DataTable
            let table = $('#teamTable').DataTable({
                pageLength: 5,
                ordering: true,
                responsive: true
            });

            // Edit Form
            $('#teamTable').on('click', '.edit-btn', function() {
                let memberId = $(this).data('id');
                window.location.href = '/blogFormPage/' + memberId; // Adjust route if different
            });

            // Delegated event for dynamically handled rows
            $('#teamTable').on('click', '.delete-btn', function() {
                let button = $(this);
                let memberId = button.data('id');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "This action cannot be undone!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#E50913',
                    cancelButtonColor: '#6B7280',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {

                        $.ajax({
                            url: '/blogDelete/' + memberId,
                            type: 'DELETE',
                            data: {
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                Swal.fire(
                                    'Deleted!',
                                    response.message,
                                    'success'
                                );
                                // Remove row from DataTable
                                table.row(button.parents('tr')).remove().draw();
                            },
                            error: function(xhr) {
                                Swal.fire(
                                    'Error!',
                                    'Something went wrong.',
                                    'error'
                                );
                            }
                        });

                    }
                });
            });
        });
    </script>
@endsection
