<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\gambar_produk;
use App\Http\Requests\Storegambar_produkRequest;
use App\Http\Requests\Updategambar_produkRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GambarProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(produk $produk, gambar_produk $gambar_produk)
    {
        $gambar_produk = $produk->gambar_produk()->get();
        return view('produk.gambar-produk.index', compact('produk', 'gambar_produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(produk $produk)
    {
        return view('produk.gambar-produk.create', compact('produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storegambar_produkRequest $request)
    {
        $produk = Produk::find($request->input('produk_id'));
        try {
            DB::beginTransaction();
            $data = $request->all();
            if ($request->hasFile('gambar')) {
                $path = $request->file('gambar')->store('images', 'public');
                $data['gambar'] = $path;
            }

            $gambar_produk = gambar_produk::create([
                'produk_id' => $data['produk_id'],
                'kode' => $data['kode'],
                'gambar' => $data['gambar'],
            ]);

            DB::commit();
            return redirect()->route('produk.gambar-produk.index', $produk)->withSuccess('Gambar produk berhasil ditambah');

        } catch (\Exception $exp) {
            DB::rollback();
            return redirect()->back()->withErrors($exp->getMessage())->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(gambar_produk $gambar_produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(produk $produk, gambar_produk $gambar_produk)
    {
        return view('produk.gambar-produk.edit', compact('produk', 'gambar_produk'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Updategambar_produkRequest $request, produk $produk, gambar_produk $gambar_produk)
{
    try {
        DB::beginTransaction();

        $data = $request->all();
        if ($request->hasFile('gambar')) {
            Storage::disk('public')->delete($gambar_produk->gambar);
            $path = $request->file('gambar')->store('images', 'public');
            $data['gambar'] = $path;
        }

        $gambar_produk->update([
            'kode' => $data['kode'],
            'gambar' => $data['gambar'] ?? $gambar_produk->gambar,
        ]);

        DB::commit();
        return redirect()->route('produk.gambar-produk.index', $produk)->withSuccess('Gambar produk berhasil diubah');
    } catch (\Exception $exp) {
        DB::rollback();
        return redirect()->back()->withErrors($exp->getMessage())->withInput();
    }
}

    public function destroy(produk $produk, gambar_produk $gambar_produk)
    {
        try {
            DB::beginTransaction();
            if ($gambar_produk->gambar) 
                {
                Storage::disk('public')->delete($gambar_produk->gambar);
                }
            $gambar_produk->delete();
            DB::commit();
            return redirect()->route('produk.gambar-produk.index', $produk)->withSuccess('Gambar berhasil dihapus');

        } catch (\Exception $exp) {
            DB::rollback();
            return redirect()->route('produk.gambar-produk.index', $produk)->withError($exp->getMessage());
        }
    }
}