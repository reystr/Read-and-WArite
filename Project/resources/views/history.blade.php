@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h3>History</h3>
                        <table class="table table-borderless">
                            @foreach($dataCart as $dCart)
                            <thead class="thead-dark">
                            <tr>
                                <td>{{$dCart->tanggal}}</td>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$dCart->nama_barang}}</td>
                                    <td align="left">Rp. {{number_format($dCart->harga)}}</td>
                                    <td align="left">Quantity: {{$dCart->jumlah_barang}}</td>
                                    <td align="left">Sub Total Rp. {{number_format($dCart->jumlah_harga)}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

@endsection
