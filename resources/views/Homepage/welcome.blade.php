<x-app-layout>
<section class="py-10 bg-gray-200">
        <div class="container mx-auto px-4 flex justify-center">
            <div class="relative overflow-hidden rounded-lg border-4 max-w-5xl w-full" data-carousel="slide" style="height: 500px">
                <div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/gambar/kelapa6.jpeg" class="absolute block w-full h-full object-cover" alt="Kelapa 1">
                        <div class="absolute left-10 bottom-10 text-gray bg-gray-100 text-xl bg-opacity-50 p-3 rounded">
                            <p>Cerahkan suasanamu dengan Air Kelapa</p>
                        </div>
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/gambar/kelapa2.jpeg" class="absolute block w-full h-full object-cover" alt="Kelapa 2">
                        <div class="absolute left-10 bottom-10 text-gray bg-gray-100 text-xl bg-opacity-50 p-3 rounded">
                            <p>Rasakan kesegarannya </p>
                        </div>
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/gambar/kelapa3.jpeg" class="absolute block w-full h-full object-cover" alt="Kelapa 3">
                        <div class="absolute left-10 bottom-10 text-gray bg-gray-100 text-xl bg-opacity-50 p-3 rounded">
                            <p>khasiat baik dan enak dari kelapa</p>
                        </div>
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/gambar/kelapa4.jpg" class="absolute block w-full h-full object-cover" alt="Kelapa 4">
                        <div class="absolute left-10 bottom-10 text-gray bg-gray-100 text-xl bg-opacity-50 p-3 rounded">
                            <p>Rasakan beberapa macam rasa kelapa</p>
                        </div>
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/gambar/kelapa5.jpg" class="absolute block w-full h-full object-cover" alt="Kelapa 5">
                        <div class="absolute left-10 bottom-10 text-gray bg-gray-100 text-xl bg-opacity-50 p-3 rounded">
                            <p>Ayo kita coba kelapa</p>
                        </div>
                    </div>
                </div>
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                </div>
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 focus:ring-4 focus:ring-white">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 focus:ring-4 focus:ring-white">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                    </span>
                </button>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    </section>


    <section style= "background-image: url('/gambar/kelapa3.jpeg'); background-size: cover;" class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                <img class="object-cover object-center rounded" alt="hero" img src="/gambar/boss kelapa.jpeg">
            </div>
            <div class="bg-white border-4 bg-opacity-75 mx-20 lg:flex-grow flex flex-col md:items-start md:text-left items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Tentang ES KELAPA Airy</h1>
                <p class="mb-8 leading-relaxed">Berdiri sejak tahun 2022 sampai sekarang, memiliki kelapa yang terbaik dan harga yang begitu terjangkau untuk masyarakat umum.</p>
            </div>
        </div>
    </section>


    <section class="p-6">
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
        <div class="flex justify-center">
            <a class="mt-8 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" href="/product">
                <svg class="w-3.5 h-3.5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                    <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
                </svg>
                Barang Lain
            </a>
        </div>
    </section> 


    <section style="background-image: url('/gambar/kelapa5.jpg'); background-size: cover;">
        <div class="text-gray-600 body-font relative">
            <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
                <div class="lg:w-2/3 w-full bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 border-4 flex items-end justify-start relative" style="height: 400px;">
                    <iframe class="absolute inset-0 w-full h-full" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249.31483318466982!2d104.03416090398419!3d1.1336806164510271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1717779073194!5m2!1sen!2sid"></iframe>
                </div>
                <div class="lg:w-1/3 w-full bg-gray-100 border-4 py-1 px-3 rounded text-base flex flex-col items-start mt-10 lg:mt-0">
                    <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Give us your feedback!</h2>
                    <p class="leading-relaxed mb-5 text-gray-600">Supaya kami bisa meningkatkan kualitas</p>
                    <div>
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">JAM OPERASIONAL</h2>
                        <p class="leading-relaxed mb-5 text-gray-600">9 pagi -10 malam</p>
                    </div>
                    <div>
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">NOMOR TELEPON (WA)</h2>
                        <p class="leading-relaxed">0852-8890-9607</p>
                        <p class="leading-relaxed mb-5">0812-6818-8038</p>
                    </div>
                    <div>
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
                        <p class="mt-1">simpang aku tahu center, depan perumahan bukit beruntung</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="bg-gray-100 bg-opacity-75 text-3xl font-medium title-font text-gray-900 mb-12 text-center">Testimonials</div>
            <div class="flex flex-wrap -m-4">
                <div class="p-4 md:w-1/2 w-full">
                    <div class="h-full border-4 bg-gray-100 bg-opacity-75 p-8 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                        <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                        </svg>
                        <p class="leading-relaxed mb-6">"Produk air kelapanya segar dan sehat untuk saya yang sering sakit perut!"</p>
                        <a class="inline-flex items-center">
                            <img alt="testimonial" src="/gambar/testimoni1.jpeg" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                            <span class="flex-grow flex flex-col pl-4">
                                <span class="title-font font-medium text-gray-900">Bryan Velasco</span>
                                <span class="text-gray-500 text-sm">Mahasiswa</span>
                            </span>
                        </a>
                    </div>
                </div>
            <div class="p-4 md:w-1/2 w-full">
                <div class="h-full border-4 bg-gray-100 bg-opacity-75 p-8 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                        <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                    </svg>
                    <p class="leading-relaxed mb-6">"Air kelapa nya sangat menyegarkan banget dijamin deh di toko ini"</p>
                    <a class="inline-flex items-center">
                        <img alt="testimonial" src="/gambar/testimoni2.jpeg" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                        <span class="flex-grow flex flex-col pl-4">
                            <span class="title-font font-medium text-gray-900">Jovan Gui</span>
                            <span class="text-gray-500 text-sm">Mahasiswa</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>