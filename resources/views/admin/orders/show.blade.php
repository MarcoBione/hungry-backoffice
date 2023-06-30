@extends('layouts.app')

@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="pt-4 container d-flex flex-column align-items-center justify-content-center gap-4">
        {{-- Title with the order id and the basket icon --}}
        <h1 class="d-flex gap-3">
            <i class="fa-solid fa-basket-shopping"></i>
            <span>Ordine {{ $order->id }}</span>
        </h1>
        {{-- Section with the info about the creation time, last update time and the current status --}}
        <div class="d-flex gap-4 bg-dark text-light p-4 rounded-4 text-center align-items-start">
            <div class="d-flex flex-column align-items-center">
                <p class="fw-bold fs-5">Creazione</p>
                <p>{{ $order->created_at }}</p>
            </div>
            <div class="d-flex flex-column align-items-center">
                <p class="fw-bold fs-5">Ultimo aggiornamento</p>
                <p>{{ $order->updated_at }}</p>
            </div>
            <div class="d-flex flex-column align-items-center">
                <p class="fw-bold fs-5">Stato</p>
                <p>{{ $order->status }}</p>
            </div>
        </div>
        {{-- Container of the info about the order and the user that maded the order --}}
        <div class="d-flex p-4 justify-content-center align-items-start">
            {{-- Container on the left side of the screen with the dishes info --}}
            <div class="d-flex flex-column align-items-center">

            </div>
            {{-- Container on the right side of the screen with the info about the user --}}
            <div class="d-flex flex-column align-items-center">
                {{-- Container with the address --}}
                <div class="d-flex gap-4 align-items-start border rounded-4 p-4">
                    <i class="fa-solid fa-location-dot fs-3"></i>
                    <div class="d-flex flex-column align-items-start justify-content-start">
                        <span class="fs-5 fw-bold mb-2">Indirizzo di consegna</span>
                        <div class="d-flex flex-column align-items-start">
                            <span>{{ $order->receiver }}</span>
                            <span>{{ $order->address }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--
        <th scope="col">Destinatario</th>
        <th scope="col">Numero di telefono</th>
        <th scope="col">Note</th>
        <th scope="col">Prezzo totale</th>
        <th scope="col">Indirizzo</th>
    --}}
@endsection
