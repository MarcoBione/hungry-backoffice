@extends('layouts.app')

@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col col-6">
                <div class="card">
                    <img class="card-img-top" style="height: 300px; object-fit: cover; object-position: center"
                        src="{{ $caterer->image }}" alt="{{ $caterer->name }}">
                </div>
            </div>
            <div class="col col-6">
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
            </div>
        </div>
        <div class="my-2">
            <a href="{{ route('admin.dishes.create') }}" class="btn btn-success text-capitalize">aggiungi piatto</a>
            @if (count($dishes) > 0)
                    <h3 class="my-5"><i class="fa-solid fa-utensils me-2"></i>Piatti</h3>
                    @foreach ($dishes as $key => $dish)
                        <div class="accordion" id="tipologiesAccordion">
                            @if(str_contains($key, ';'))
                                @foreach($partialKey = explode(';', $key ) as $item)
                                {{-- {{dd($partialKey, $item[1])}} --}}
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button text-capitalize" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#{{str_replace(' ', '', $item)}}" aria-expanded="false"
                                            aria-controls="{{str_replace(' ', '', $item)}}">
                                            {{ $item }}
                                        </button>
                                    </h2>
                                    <div id="{{str_replace(' ', '', $item)}}" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne" data-bs-parent="#tipologiesAccordion">
                                        <div class="accordion-body">
                                            @foreach ($dish as $type)
                                                <a class="text-decoration-none text-dark" href="{{ route('admin.dishes.show', $type->slug)}}"><h6>{{ $type->name }}</h6></a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @elseif(!str_contains($key, ';'))
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button text-capitalize" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#{{str_replace(' ', '', $key)}}" aria-expanded="false"
                                            aria-controls="{{str_replace(' ', '', $key)}}">
                                            {{ $key }}
                                        </button>
                                    </h2>
                                    <div id="{{str_replace(' ', '', $key)}}" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne" data-bs-parent="#tipologiesAccordion">
                                        <div class="accordion-body">
                                            @foreach ($dish as $type)
                                                <a class="text-decoration-none text-dark" href="{{ route('admin.dishes.show', $type->slug)}}"><h6>{{ $type->name }}</h6></a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
            @endif
        </div>
    </div>

@endsection
