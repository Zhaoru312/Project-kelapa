<x-app-layout>
    <div class="p-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach ($produk as $produk)
                <div>
                    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="{{ route('product.booking', $produk->id) }}" class="block relative h-48 rounded overflow-hidden">
                            @if ($produk->gambar_produk->isNotEmpty())
                                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('storage/' . $produk->gambar_produk->first()->gambar) }}">
                            @endif
                        </a>
                        <div class="px-5 pb-5">
                            <a href="{{ route('product.booking', $produk->id) }}">
                                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $produk->nama }}</h5>
                            </a>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-900 dark:text-white">{{ formatRupiah($produk->harga, true) }}</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-900 dark:text-white">{{ $produk->deskripsi }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
