@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col col-4">
                <div class="card">
                    <img class="card-img-top" style="height: 300px; object-fit: cover; object-position: center" src="{{ $caterer->image }}" alt="{{ $caterer->name }}">
                </div>
            </div>
            <div class="col col-4">
                <h3>{{ $caterer->name }}</h3>
                <p>{{ $caterer->address }}</p>
                <p>{{ $caterer->phone_number }}</p>


                @if ($caterer->categories && count($caterer->categories) > 0)
                    <div class="d-flex align-items-center gap-2 my-2">
                        <h6 class="mt-3">Categorie:</h6>
                        @foreach ($caterer->categories as $category)
                            <a href="{{ route('admin.categories.show', $category->id) }}"
                                class="badge rounded-pill text-bg-primary py-2 px-2 mt-2">{{ $category->name }}</a>
                        @endforeach
                    </div>
                @endif
                @if (count($dishes) > 0)
                    <div class="d-flex align-items-center gap-2 my-2">

                        <ul>
                            <h6 class="mt-3"><i class="fa-solid fa-utensils me-2"></i>Piatti: </h6>
                            @foreach ($dishes as $dish)
                            <li>
                                <a href="{{ route('admin.dishes.show', $dish->id) }}"
                                    class=" py-2 px-2 mt-2">{{ $dish->name }}</a>
                            </li>
                            @endforeach
                        </ul>



                    </div>
                @endif
                <div class="mt-5 d-flex justify-content-end">
                    <h4><a href="{{ route('admin.caterers.index')}}">Torna alla lista dei ristoranti</a></h4>
                </div>

            </div>
        </div>
    </div>

@endsection
