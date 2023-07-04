@extends('layouts.app')

@section('content')
    <div class="container">
        @if (auth()->user()->is_admin || count($caterers)==0)
            <div class="text-end">
                <a class="btn btn-success mt-3" href="{{ route('admin.caterers.create') }}">Aggiungi un ristorante</a>
            </div>
        @endif
        <div class="container d-flex flex-wrap gap-3 justify-content-center align-items-center mt-5">
            @foreach ($caterers as $caterer)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $caterer->name }}</h5>
                        <img class="card-img-top" style="width: 250px; height: 230px; object-fit: cover"
                            src="{{ asset('storage/' . $caterer->image) }}" alt="{{ $caterer->name }}">
                    </div>
                    <div class="card-body d-flex justify-content-center align-items-center gap-2 ">
                        <a href="{{ route('admin.caterers.show', $caterer->slug) }}" class="btn btn-primary text-white">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.caterers.edit', $caterer->slug) }}" class="btn btn-warning text-white">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                        <form action="{{ route('admin.caterers.destroy', $caterer->slug) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type='submit' class="delete-button btn btn-danger text-white"
                                data-item-title="{{ $caterer->name }}"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('partials.modal-delete')
@endsection
