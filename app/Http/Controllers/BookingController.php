<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use Illuminate\Support\Facades\Auth;
use DB;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $booking = Booking::where('name', Auth::user()->name)->get();
        return view('homepage.belanja', compact('booking'));
    }

    public function belanja()
    {
        $booking = Booking::where('email', Auth::user()->email)->get();
        return view('homepage.belanja', compact('booking'));
    }

    public function dashboard()
    {
        $booking = Booking::all();
        return view('homepage.dashboard', compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($produk)
    {
        $produk = Produk::find($produk);
        return view('homepage.booking.booking', compact('produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookingRequest $request)
    {
        try {
            DB::beginTransaction();

            $produk = Produk::find($request->produk_id);
            $hargatotal = $produk->harga * $request->kuantitas;
            $user = Auth::user();

            Booking::create([
                'name' => $user->name,
                'email' => $user->email,
                'produk_id' => $produk->id,
                'kuantitas' => $request->kuantitas,
                'total_harga' => $hargatotal,
                'status' => 'pending',
                'alamat' => $request->alamat,
            ]);
            
            DB::commit();
            return redirect()->route('homepage.belanja')->with('success', 'Produk berhasil dibooking');
        } catch (\Exception $exp) {
            DB::rollback();
            return redirect()->back()->with('error', $exp->getMessage())->withInput();
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(booking $booking)
    {
        return view('homepage.belanja-edit', compact('booking'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingRequest $request, booking $booking, produk $produk)
    {
        try {
            DB::beginTransaction();
            $booking->Update($request->all());

            $hargatotal = $booking->produk->harga * $request->kuantitas;

            $booking->update([
                'total_harga' => $hargatotal,
            ]);

            DB::commit();
            return redirect()->route('homepage.belanja')->withsuccess('produk berhasil diedit');
        } catch (\Exeption $exp) {
            DB::rollback();
            return redirect()->back()->witherror($exp->getMessage())
            ->withinput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}