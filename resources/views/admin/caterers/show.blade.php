@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col col-4">
                <div class="card">
                    <img class="card-img-top" src="{{$caterer->image}}" alt="{{$caterer->name}}">
                </div>
            </div>
            <div class="col col-4">
                <h3>{{$caterer->name}}</h3>
                <p>{{$caterer->address}}</p>
                <p>{{$caterer->phone_number}}</p>
                <p>{{$caterer->category}}</p>

            </div>
        </div>
    </div>

@endsection
