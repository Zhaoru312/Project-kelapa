<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white bg-opacity-75 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form method="POST" action="{{ route('homepage.belanja.update', $booking)}}">
                        @csrf
                        @method('put')                                    
                        <th scope="col" class="px-6 py-3">Kuantitas</th>
                        <th scope="col" class="px-6 py-3">Alamat</th>


                        <!-- kuantitas -->
                        <div class="mt-4">
                            <x-input-label for="kuantitas" :value="__('kuantitas')" />
                            <x-text-input id="kuantitas" class="block mt-1 w-full" type="number" name="kuantitas" :value="old('kuantitas')" autocomplete="kuantitas" />
                            <x-input-error :messages="$errors->get('kuantitas')" class="mt-2" />
                        </div>
                        
                        <!-- alamat -->
                        <div class="mt-4">
                            <x-input-label for="alamat" :value="__('alamat')" />
                            <x-text-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" :value="old('alamat')" autocomplete="alamat" />
                            <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
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
