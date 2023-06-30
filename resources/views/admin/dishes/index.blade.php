@extends('layouts.app');
@section('content')
    <div class="container">
        <h1>I piatti del ristorante {{ $caterer->name }}</h1>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="text-end">
            <a class="btn btn-success mt-3" href="{{ route('admin.dishes.create') }}">Aggiungi un piatto</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Tipologie</th>
                    <th scope="col">Visibilità</th>
                    <th scope="col">Prezzo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dishes as $dish)
                    <tr>
                        <td>{{ $dish->name }}</td>
                        <td>{{ $dish->description }}</td>
                        <td>{{ $dish->tipologies }}</td>
                        <td>{{ $dish->visible }}</td>
                        <td>{{ $dish->price }}</td>
                        <td>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('admin.dishes.show', $dish->slug) }}"
                                    class="btn btn-primary text-white"><i class="fa-solid fa-eye"></i></a>
                                <a href="{{ route('admin.dishes.edit', $dish->slug) }}"
                                    class="btn btn-warning text-white"><i class="fa-solid fa-pencil"></i></a>
                                <form action="{{ route('admin.dishes.destroy', $dish->slug) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type='submit' class="delete-button btn btn-danger text-white"
                                        data-item-title="{{ $dish->title }}"> <i class="fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    @include('partials.modal-delete')
@endsection
