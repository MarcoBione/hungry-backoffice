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
        <div class="container border border-secondary rounded-4 d-flex">
            <div class="container">
                <h3 class="m-4"> <span class="text-warning text-uppercase">{{ $category->name }}</span>
                </h3>
                <div class="container-text">
                    <h2 class="fs-5">
                        {!! $category->description !!}
                    </h2>
                </div>
                <h2 class="m-4">
                    Classe stile
                    <span class="text-info">
                        {{ $category->class }}
                    </span>

                </h2>

            </div>
            <div class="d-flex justify-content-end">
                <div>
                    <img class="img-fluid p-3" src="{{ $category->image }}" alt="">
                </div>
            </div>

        </div>
    </div>
@endsection
