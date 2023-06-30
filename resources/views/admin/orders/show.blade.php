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
    </div>
    {{-- <th scope="col">Id</th>
    <th scope="col">Destinatario</th>
    <th scope="col">Numero di telefono</th>
    <th scope="col">Stato</th>
    <th scope="col">Note</th>
    <th scope="col">Prezzo totale</th>
    <th scope="col">Indirizzo</th>
    <th scope="col">Creazione</th>
    <th scope="col">Ultima modifica</th>
    <th scope="col">Azioni</th> --}}
@endsection
