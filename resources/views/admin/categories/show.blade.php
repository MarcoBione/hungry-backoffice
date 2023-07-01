@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="p-5 d-flex justify-content-end">
            <div>
                <a href="{{ route('admin.categories.edit', $category->id) }}"
                    class="btn btn-success mt-2 text-capitalize">modifica
                    categoria</a>
                <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary  mt-2 text-capitalize">Torna a
                    categorie</a>
            </div>
        </div>
        <div class="container border border-secondary rounded-4 d-flex">
            <div>
                <h3 class="m-4"> <span class="text-warning text-uppercase">{{ $category->name }}</span>
                </h3>
                <h2 class="m-4">
                    {!! $category->description !!}
                </h2>
            </div>

            <div class="d-flex justify-content-end">
                <img class="w-25 img-thumbnail" src="{{ $category->image }}" alt="">
            </div>


        </div>
    </div>
@endsection
