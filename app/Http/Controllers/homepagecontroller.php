<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gambar_produk;
use App\Models\produk;
use Illuminate\Support\Facades\Storage;

class homepagecontroller extends Controller
{
    public function home(produk $produk, gambar_produk $gambar_produk)
    {
        $produk = produk::all();
        return view('homepage.welcome', compact('produk', 'gambar_produk'));
    }

    public function product()
    {
        $produk = produk::with('gambar_produk')->get();
        return view('homepage.booking.product', compact('produk'));
    }

    public function about()
    {
        return view('homepage.about');
    }

    public function contactUs()
    {
        return view('homepage.contact-us');
    }

    public function testimony()
    {
        return view('homepage.testimony');
    }
    

}
