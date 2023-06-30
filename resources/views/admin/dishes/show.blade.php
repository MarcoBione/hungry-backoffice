@extends('layouts.app');
@section('content')
    <div class="container m-5">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
        <div class="card">
            <h1 class="card-title">Piatto: {{ $dish->name }}</h1>
            <div class=" card-body d-flex align-items-center justify-content-between">
                <h3>Visibile sul sito?</h3>
                <h3>{{ $dish->visible === 1 ? 'sì' : 'no' }}</h3>
            </div>
            <div class="card-body d-flex align-items-center justify-content-between">
                <h3>Prezzo</h3>
                <h3>{{ $dish->price }}</h3>
            </div>
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <img src="{{ $dish->description }}" alt="{{ $dish->name }}">
                </div>
                <p>
                    Descrizione: {{ $dish->description }}
                </p>
            </div>
            <div class="card-body">
                Tipologie assegnate: {{ $dish->tipologies }}
            </div>
            <div class=" card-body d-flex justify-content-between align-items-center">
                <a href="{{ route('admin.dishes.edit', $dish->slug) }}" class="btn btn-warning text-white"><i
                        class="fa-solid fa-pencil"></i>Modifica
                </a>
                <form action="{{ route('admin.dishes.destroy', $dish->slug) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type='submit' class="delete-button btn btn-danger text-white"
                        data-item-title="{{ $dish->title }}"> <i class="fa-solid fa-trash"></i>Elimina</button>
                </form>
            </div>
        </div>
    </div>
    @include('partials.modal-delete')
@endsection
