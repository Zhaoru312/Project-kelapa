<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 bg-gray-300">
                    <div class="relative object-center rounded overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Nama Produk</th>
                                    <th scope="col" class="px-6 py-3">Kuantitas</th>
                                    <th scope="col" class="px-6 py-3">Total Harga</th>
                                    <th scope="col" class="px-6 py-3">Status</th>
                                    <th scope="col" class="px-6 py-3">Alamat</th>
                                    <th scope="col" class="px-6 py-3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($booking as $booking)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-4">{{ $booking->produk->nama }}</td>
                                        <td class="px-6 py-4">{{ $booking->kuantitas }}</td>
                                        <td class="px-6 py-4">{{ formatRupiah($booking->total_harga, true) }}</td>
                                        <td class="px-6 py-4">{{ $booking->status }}</td>
                                        <td class="px-6 py-4">{{ $booking->alamat }}</td>
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
                                                    <x-dropdown-link href="{{route('homepage.belanja.edit', $booking)}}" class="z-50 font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                        {{ __('Edit') }}
                                                    </x-dropdown-link>
                                                </x-slot>
                                            </x-dropdown>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-4 text-center">No bookings found.</td>
                                    </tr>
                                    @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
