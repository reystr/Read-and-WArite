@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{url('stationery')}}">Back</a>
            </div>
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h3>Cart</h3>

                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Item Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total Price</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cartCheckout as $cartCO)
                                        <tr>
                                            <td>{{$cartCO->nama_barang}}</td>
                                            <td>{{$cartCO->harga}}</td>
                                            <td>{{$cartCO->jumlah_barang}}</td>
                                            <td align="left">Rp. {{number_format($cartCO->jumlah_harga)}}</td>
                                            <td>
                                                <form action="{{url('#')}}" method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{url('checkout')}}/{{$cartCO->id}}" method="post">
                                                    @csrf
                                                    {{method_field('DELETE')}}
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                        <tr>
                                            <td>
                                                <a href="{{url('confirm')}}" class="btn btn-success">Checkout</a>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
{{--                        @endif--}}
                    </div>
                </div>
                </div>
            </div>

        </div>
    </div>
@endsection
