<?php

namespace App\Http\Controllers;
use App\Stationery;
use App\Cart;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StationeryDetailsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $detailStationery = Stationery::where('id', $id)->first();
        return view('details', compact('detailStationery'));
    }

    public function order(Request $request, $id){
        $detailStationery = Stationery::where('id', $id)->first();
        $tanggal = Carbon::now();

        if ($request->quantity > $detailStationery->stok){
            return redirect('details/'.$id);
        }

            $cart = new Cart;
            $cart->user_id = Auth::user()->id;
            $cart->tanggal = $tanggal;
            $cart->status = 0;
            $cart->nama_barang = $detailStationery->nama_barang;
            $cart->harga = $detailStationery->harga;
            $cart->jumlah_barang = $request->quantity;
            $cart->jumlah_harga = $detailStationery->harga*$request->quantity;
            $cart->save();


        return redirect('checkout');

    }

    public function checkout(){
        $cartCheckout = Cart::all();
        return view ('checkout', compact('cartCheckout'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $cartCO = Cart::where('id', $id)->first();
        $cartCO->delete();

        return redirect('checkout');

    }

    public function confirm()
    {
        $cartCO = Cart::where('user_id', Auth::user()->id)->where('status', 0)->first(); // TODO: Change the autogenerated stub
//        $cartCO->status = 1;
//        $cartCO->update();

        return redirect('checkout');
    }
}
