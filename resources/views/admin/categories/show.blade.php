@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="p-5 d-flex justify-content-end">
            <div>
                @if (auth()->user()->is_admin)
                    <a href="{{ route('admin.categories.edit', $category->id) }}"
                        class="btn btn-success mt-2 text-capitalize">modifica
                        categoria</a>
                @endif
                <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary  mt-2 text-capitalize">Torna a
                    categorie</a>
            </div>
        </div>
        <div class="container border border-secondary rounded-4 d-flex d-sm-column flex-wrap flex-lg-nowrap">
            <div class="container">
                <h3 class="m-4 text-uppercase">{{ $category->name }}</h3>
                <div class="fs-5">
                    {!! $category->description !!}
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <img class="img-fluid p-3" src="{{ asset('storage/' . $category->image) }}" alt="{{$category->name}}">
            </div>
        </div>
    </div>
@endsection
