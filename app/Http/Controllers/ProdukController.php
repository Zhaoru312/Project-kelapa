<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Http\Requests\StoreprodukRequest;
use App\Http\Requests\UpdateprodukRequest;
use DB;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = produk::all();
        return view('produk.index', compact('produk'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreprodukRequest $request)
    {
        try {
            DB::beginTransaction();
            $produk = produk::create($request->all());
            DB::commit();
            return redirect()->route('produk.index')->withsuccess('produk berhasil ditambah');
        } catch (\Exeption $exp) {
            DB::rollback();
            return redirect()->back()->witherror($exp->getMessage())->withinput();
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(produk $produk)
    {
        return view('produk.edit', compact('produk'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateprodukRequest $request, produk $produk)
    {
        try {
            DB::beginTransaction();
            $produk->Update($request->all());
            DB::commit();
            return redirect()->route('produk.index')->withsuccess('produk berhasil diedit');
        } catch (\Exeption $exp) {
            DB::rollback();
            return redirect()->back()->witherror($exp->getMessage())
            ->withinput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(produk $produk)
    {
        try {
            DB::beginTransaction();
            $produk->delete();
            DB::commit();
            return redirect()->route('produk.index')->withsuccess('produk berhasil dihapus');
        } catch (\Exeption $exp) {
            DB::rollback();
            return redirect()->route('produk.index')->witherror('produk gagal dihapus : ', $exp->getMessage());
        }
    }

}
