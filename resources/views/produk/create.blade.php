<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white bg-opacity-75 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form method="POST" action="{{ route('produk.store') }}">
                        @csrf

                        <!-- nama -->
                        <div>
                            <x-input-label for="nama" :value="__('nama')" />
                            <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" autofocus autocomplete="nama" />
                            <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                        </div>

                        <!-- deskripsi -->
                        <div class="mt-4">
                            <x-input-label for="deskripsi" :value="__('deskripsi')" />
                            <x-text-input id="deskripsi" class="block mt-1 w-full" type="text" name="deskripsi" :value="old('deskripsi')" autocomplete="deskripsi" />
                            <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
                        </div>

                        <!-- kode -->
                        <div class="mt-4">
                            <x-input-label for="kode" :value="__('kode')" />
                            <x-text-input id="kode" class="block mt-1 w-full" type="text" name="kode" :value="old('kode')" autocomplete="kode" />
                            <x-input-error :messages="$errors->get('kode')" class="mt-2" />
                        </div>

                        <!-- kuantitas -->
                        <div class="mt-4">
                            <x-input-label for="kuantitas" :value="__('kuantitas')" />
                            <x-text-input id="kuantitas" class="block mt-1 w-full" type="number" name="kuantitas" :value="old('kuantitas')" autocomplete="kuantitas" />
                            <x-input-error :messages="$errors->get('kuantitas')" class="mt-2" />
                        </div>
                        
                        <!-- harga -->
                        <div class="mt-4">
                            <x-input-label for="harga" :value="__('harga')" />
                            <x-text-input id="harga" class="block mt-1 w-full" type="text" name="harga" :value="old('harga')" autocomplete="harga" />
                            <x-input-error :messages="$errors->get('harga')" class="mt-2" />
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
