@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{url('stationery')}}">Back</a>
            </div>
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{url('Assets')}}/{{$detailStationery->gambar}}" class="rounded mx-auto d-block" width="100%" alt="">
                            </div>
                            <div class="col-md-6">
                                <h2>{{$detailStationery->nama_barang}}</h2>
                                <br>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Harga</td>
                                            <td>:</td>
                                            <td>{{number_format($detailStationery->harga)}}</td>
                                        </tr>
                                        <tr>
                                            <td>Stok</td>
                                            <td>:</td>
                                            <td>{{number_format($detailStationery->stok)}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Barang</td>
                                            <td>:</td>
                                            <td>{{($detailStationery->jenis_barang)}}</td>
                                        </tr>
                                        <tr>
                                            <td>Deskripsi</td>
                                            <td>:</td>
                                            <td>{{($detailStationery->deskripsi)}}</td>
                                        </tr>
                                        <tr>
                                            <td>Quantity</td>
                                            <td>:</td>
                                            <td>
                                                <form action="{{url('details')}}/{{$detailStationery->id}}" method="post">
                                                    @csrf
                                                    <input type="number" id="quantity" name="quantity" min="1" max="50">
                                                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
