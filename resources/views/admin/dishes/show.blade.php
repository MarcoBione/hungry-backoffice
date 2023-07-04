@extends('layouts.app')
@section('content')
    <div class="container p-4">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="card p-4">
            <div class="card-title d-flex justify-content-between align-items-center flex-wrap gap-4">
                <h1>{{ $dish->name }}</h1>
                <div class="d-flex justify-content-center align-items-center gap-4">
                    <a href="{{ route('admin.dishes.edit', $dish->slug) }}" class="btn btn-warning text-white">
                        <i class="fa-solid fa-pencil"></i>
                        <span>Modifica</span>
                    </a>
                    <form action="{{ route('admin.dishes.destroy', $dish->slug) }}" method="POST" class="mb-0">
                        @csrf
                        @method('DELETE')
                        <button type='submit' class="delete-button btn btn-danger text-white"
                            data-item-title="{{ $dish->title }}"> <i class="fa-solid fa-trash"></i>Elimina</button>
                    </form>
                </div>
            </div>
            <div class="card-body ">
                <img class="card-img-top" src="{{ asset('storage/' . $dish->image) }}" alt="{{ $dish->name }}">
            </div>
            <p class="card-body ">{{ $dish->description }}</p>
            <div class="card-body d-flex align-items-center justify-content-between">
                <h3>Prezzo</h3>
                <h3>{{ $dish->price }} &euro;</h3>
            </div>
            <div class="card-body d-flex align-items-center justify-content-between">
                <h3>Visibile sul sito?</h3>
                <h3>{{ $dish->visible === 1 ? 'sì' : 'no' }}</h3>
            </div>
            <div class="card-body d-flex align-items-center justify-content-between">
                <h3>Tipologia</h3>
                <h3>{{ $dish->tipologies }}</h3>
            </div>
        </div>
    </div>
    @include('partials.modal-delete')
@endsection
