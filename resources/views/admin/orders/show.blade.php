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
