<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Cancer Category') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
            <div
                class="bg-gray-200 dark:bg-gray-800 bg-opacity-25 grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8 p-6 lg:p-8">

                {{-- content start here --}}

                <div>
                    @if (session()->has('message'))
                        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                            role="alert">
                            <div class="flex">
                                <div>
                                    <p class="text-sm">{{ session('message') }}</p>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="flex justify-between">
                        <div class="flex-auto">
                            <p class="mb-6 text-gray-500 dark:text-gray-400 leading-relaxed">
                                Halaman Manajemen Kategori Kanker memungkinkan pengguna untuk mengatur daftar kategori kanker dengan mudah dan efisien. Dengan tampilan yang intuitif, pengguna dapat menambah, mengubah, menghapus, dan melihat informasi kategori kanker dengan cepat.
                            </p>
                        </div>
                        <div class="flex-none">
                            <button wire:click="create()"
                                class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded my-3"><i
                                    class="fa-solid fa-folder-plus fa-fade"></i> Create
                                New</button>
                        </div>
                    </div>


                    @if ($isModalOpen)
                        @include('livewire.cancer-detail.cancer-detail-create')
                    @endif

                    {{-- table start --}}
                    <div class="min-w-full bg-white dark:bg-gray-800 shadow rounded-lg border dark:border-gray-600">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-200 uppercase tracking-wider border-b dark:border-gray-600">
                                        Thumbnail
                                    </th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-200 uppercase tracking-wider border-b dark:border-gray-600">
                                        Category
                                    </th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-200 uppercase tracking-wider border-b dark:border-gray-600">
                                        Title
                                    </th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-200 uppercase tracking-wider border-b dark:border-gray-600">
                                        Preview Content
                                    </th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-200 uppercase tracking-wider border-b dark:border-gray-600">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-600">
                                <!-- Start Row -->
                                @foreach ($posts as $post)
                                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100">
                                            {{ $post->thumbnail }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100">
                                            {{ $post->category_id }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100">
                                            {{ $post->title }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-normal text-gray-900 dark:text-gray-100">
                                            {{ $post->content }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm space-x-4"> <button
                                                wire:click="edit({{ $post->id }})"
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"><i
                                                    class="fa-regular fa-pen-to-square"></i> Edit</button>
                                            <button onclick="deletePost({{ $post->id }}, '{{ $post->title }}')"
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"><i
                                                    class="fa-solid fa-trash"></i> Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                                <!-- End Row -->
                            </tbody>
                        </table>
                    </div>
                    {{-- table end --}}

                </div>

                {{-- content end here --}}

            </div>
        </div>
    </div>
</div>


{{-- SCRIPT BELOW HERE --}}

<script>
    function deletePost(id, title) {
        Swal.fire({
            title: 'Are you sure?',
            text: title + " akan terhapus",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                Livewire.emit('deleteData', id);
            }
        })
    }
</script>
