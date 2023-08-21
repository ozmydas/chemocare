<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">
                        <div class="mb-4">
                            <label for="category_id" class="block text-gray-700 text-sm font-bold mb-2">Category</label>
                            <input category_id="text"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="category_id" placeholder="Enter Category" wire:model="category_id">
                            @error('category_id')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="mb-4">
                            <label for="thumbnail"
                                class="block text-gray-700 text-sm font-bold mb-2">Thumbnail / Images</label>
                            <input type="text"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="thumbnail" placeholder="Enter Images" wire:model="thumbnail">
                            @error('thumbnail') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                        <div class="mb-4">
                            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Judul Halaman</label>
                            <input type="text"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="title" placeholder="Enter title" wire:model="title">
                            @error('title')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Konten
                                Deskripsi</label>
                            <textarea
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                rows="8" id="content" wire:model="content" placeholder="content"></textarea>
                            @error('content')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="video_url"
                                class="block text-gray-700 text-sm font-bold mb-2">Video URL (optional)</label>
                            <input type="text"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="video_url" placeholder="Enter Video URL" wire:model="video_url">
                            @error('video_url') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click.prevent="store()" type="button"
                            class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            <i class="fa-solid fa-floppy-disk"></i> Store
                        </button>
                    </span>
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                        <button wire:click="closeModal()" type="button"
                            class="bg-orange-600 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
                            <i class="fa-solid fa-square-xmark"></i> Close
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>


{{-- SCRIPT BELOW HERE --}}

<script>
    // ClassicEditor
    //     .create( document.querySelector( '#description' ) )
    //     .catch( error => {
    //         console.error( error );
    //     } );
</script>
