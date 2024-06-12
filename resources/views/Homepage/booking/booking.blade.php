<x-app-layout>
    <div class="p-6 pb-20">
        <div class="md:flex">
            <div class="mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <img alt="Product Image" class="object-cover object-center" src="{{ asset('storage/' . $produk->gambar_produk->first()->gambar) }}">
            </div>

            <div class="md:w-1/2 md:pl-6">
                <h2 class="text-2xl font-semibold">{{ $produk->nama }}</h2>
                <p class="mt-4">{{ $produk->deskripsi }}</p>
                <p class="mt-4">{{ formatRupiah($produk->harga, true) }}</p>

                <form method="POST" action="{{ route('product.booking.store', $produk->id) }}" enctype="multipart/form-data" class="mt-6">
                    @csrf
                    <input type="hidden" name="produk_id" value="{{ $produk->id }}">

                    <div class="mt-4">
                        <label for="kuantitas" class="block">Kuantitas:</label>
                        <input type="number" name="kuantitas" id="kuantitas" class="w-full p-2 border border-gray-300 rounded" required>
                    </div>
                    <div class="mt-4">
                        <label for="alamat" class="block">Alamat:</label>
                        <input type="text" name="alamat" id="alamat" class="w-full p-2 border border-gray-300 rounded" required>
                    </div>
                    <div class="mt-6">
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Booking Sekarang</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
