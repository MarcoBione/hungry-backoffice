@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- <a href="{{ route('admin.categories.edit') }}" class="btn btn-secondary mt-2 text capitalize">crea nuova
            categoria</a> --}}


        <h3 class="mb-4"> <span class="text-warning text-uppercase">{{ $category->name }}</span>
        </h3>
        <h2 class="mb-4">
            {{ $category->description }}



        </h2>
        <img src="{{ $category->image }}" alt="">


    </div>
@endsection
