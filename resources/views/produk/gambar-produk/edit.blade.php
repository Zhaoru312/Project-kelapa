<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white bg-opacity-75 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form method="POST" action="{{ route('produk.gambar-produk.update', [$produk, $gambar_produk])}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <input type="hidden" name="produk_id" value="{{$produk->id}}">
                        
                        <!-- gambar -->
                        <div class="mt-4">
                            <x-input-label for="gambar" :value="__('gambar')" />
                            <x-text-input id="gambar" class="block mt-1 w-full" type="file" name="gambar" :value="old('gambar')" autocomplete="gambar" />
                            <x-input-error :messages="$errors->get('gambar')" class="mt-2" />
                        </div>

                        <!-- kode -->
                        <div class="mt-4">
                            <x-input-label for="kode" :value="__('kode')" />
                            <x-text-input id="kode" class="block mt-1 w-full" type="text" name="kode" :value="old('kode')" autocomplete="kode" />
                            <x-input-error :messages="$errors->get('kode')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Submit') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
