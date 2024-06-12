<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="relative object-center rounded overflow-x-auto shadow-md sm:rounded-lg">
                        <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
                        <a class='text-white bg-gray-500 border-0 py-2 px-6 focus:outline-none hover:bg-gray-600 rounded text-lg' href="{{route('produk.create')}}">add produk</a>
                        <label for="table-search" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                </div>
                                <input type="text" id="table-search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="cari barang">
                            </div>
                        </div>
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nama
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        kode
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        kuantitas
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        harga
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($produk as $produk)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $produk->nama }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $produk->kode }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $produk->kuantitas }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ formatRupiah($produk->harga, true) }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <x-dropdown>
                                                <x-slot name="trigger">
                                                    <button class="inline-flex  px-3 py-2 border text-sm leading-4 font-medium text-gray-400 hover:text-gray-100 focus:outline-none transition ease-in-out duration-150">
                                                        <div>action</div>

                                                        <div class="ms-1">
                                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                            </svg>
                                                        </div>
                                                    </button>
                                                </x-slot>
                                                <x-slot name="content">
                                                    <x-dropdown-link href="{{route('produk.gambar-produk.index', $produk)}}" class="z-50 font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                        {{ __('gambar') }}
                                                    </x-dropdown-link>
                                                    <x-dropdown-link href="{{route('produk.edit', $produk->id)}}" class="z-50 font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                        {{ __('Edit') }}
                                                    </x-dropdown-link>
                                                    <x-dropdown-link class="z-50 font-medium text-red-600 dark:text-red-500 hover:underline" x-data="" x-on:click.prevent="$dispatch('open-modal', 'konfirmasi-delete-{{$produk->id}}')">
                                                        {{ __('Delete') }}
                                                    </x-dropdown-link>
                                                </x-slot>
                                            </x-dropdown>
                                            <x-modal name="konfirmasi-delete-{{$produk->id}}" shows="$errors->produk_delete->isNotEmpty()" focusable>    
                                                <form method="POST" action="{{ route('produk.destroy', $produk)}}" class="px-6 py-4">
                                                    @csrf
                                                    @method('DELETE')
                                                    <h2>Want to delete? {{$produk->name}}</h2>
                                                    <div class="mt-6 flex justify-end">
                                                        <x-secondary-button x-on:click="$dispatch('close')">{{__('Cancel')}}</x-secondary-button>
                                                        <x-danger-button class="ms-3">{{__('Delete')}}</x-danger-button>
                                                    </div>
                                                </form>
                                            </x-modal>  
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
