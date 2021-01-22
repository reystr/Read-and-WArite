@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            @foreach($data_stationery as $dataStat)
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card">
                        <img class="card-img-top" src="{{url('Assets')}}/{{$dataStat->gambar}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$dataStat->nama_barang}}</h5>
                            <p class="card-text">{{$dataStat->deskripsi}}</p>
                            <a href="{{url('details')}}/{{$dataStat->id}}" class="btn btn-primary">Lihat Barang</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
