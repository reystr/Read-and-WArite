@extends('layouts.app')

@section('content')

    <div class="d-flex flex-column container">
        @foreach($threads as $thread)
            <div class="card m-3">
                <div class="card-header">
                    {{$thread->title}}
                </div>
                <div class="card-body">
                    <p class="card-text">{{$thread->content}}</p>
                    <a href="#" class="btn btn-primary">Update</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection
