<?php

namespace App\Http\Controllers;
use App\Stationery;
use App\Cart;
use Auth;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dataCart = Cart::all();
        return view('history', compact('dataCart'));
    }
}
