@extends('layouts.app')

@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="pt-4 container d-flex flex-column align-items-center justify-content-center gap-4">
        <div class="w-100 d-flex justify-content-end align-items-center gap-2">
            <a href="{{ route('admin.orders.edit', $order->id) }}" class="btn btn-warning text-white d-flex gap-2 align-items-center">
                <i class="fa-solid fa-pencil"></i>
                <span>Modifica</span>
            </a>
            <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type='submit' class="delete-button btn btn-danger text-white d-flex gap-2 align-items-center"
                    data-item-title="{{ $order->receiver }}">
                    <i class="fa-solid fa-trash"></i>
                    <span>Elimina</span>
                </button>
            </form>
        </div>
        {{-- Title with the order id and the basket icon --}}
        <h1 class="d-flex gap-3">
            <i class="fa-solid fa-basket-shopping"></i>
            <span>Ordine {{ $order->id }}</span>
        </h1>
        {{-- Section with the info about the creation time, last update time and the current status --}}
        <div class="d-flex gap-4 bg-dark text-light p-4 rounded-4 text-center align-items-start">
            <div class="d-flex flex-column align-items-center">
                <p class="fw-bold fs-5">Creazione</p>
                <p>{{ \Carbon\Carbon::parse($order->created_at)->format('d/m/Y H:i') }}</p>
            </div>
            <div class="d-flex flex-column align-items-center">
                <p class="fw-bold fs-5">Ultimo aggiornamento</p>
                <p>{{ \Carbon\Carbon::parse($order->updated_at)->format('d/m/Y H:i') }}</p>
            </div>
            <div class="d-flex flex-column align-items-center">
                <p class="fw-bold fs-5">Stato</p>
                <p>{{ $order->status }}</p>
            </div>
        </div>
        {{-- Container of the info about the order and the user that maded the order --}}
        <div class="d-flex p-4 justify-content-center align-items-start gap-4 flex-wrap">
            {{-- Container on the left side of the screen with the dishes info --}}
            <div class="col-xl-6 col-lg-5 col-12 d-flex flex-column align-items-center">
                {{-- Container with the caterer data, the summary about the dishes and the total price --}}
                <div class="d-flex flex-column gap-3 justify-content-start border rounded-4 p-4">
                    {{-- Container with the data about the restaurant --}}
                    <div class="d-flex gap-4">
                        @if (count($order->dishes)>0)
                            <img src="{{ asset('storage/' . $order->dishes[0]->caterer->image) }}" alt="{{ $order->dishes[0]->caterer->name }}" class="img-thumbnail col-3">
                            <div class="d-flex flex-column align-items-start justify-content-start">
                                <span class="fs-5 fw-bold mb-2">{{ $order->dishes[0]->caterer->name }}</span>
                                <div class="d-flex flex-column align-items-start">
                                    <span>{{ $order->dishes[0]->caterer->address }}</span>
                                    <span>{{ $order->dishes[0]->caterer->phone_number }}</span>
                                </div>
                            </div>
                        @else
                            <span class="fs-5 fw-bold mb-2">Siamo spiacenti, questo ordine non ha piatti associati quindi non è possibile mostrare le informazioni del ristorante dal quale si sta effettuando l'ordine!</span>
                        @endif
                    </div>
                    <hr>
                    {{-- Container with the dishes included in the order --}}
                    <div class="d-flex flex-column gap-2">
                        <span class="fs-5 fw-bold">Riepilogo dell'ordine</span>
                        <div class="d-flex gap-4 flex-column align-items-start">
                            @if (count($order->dishes)>0)
                                @foreach ($order->dishes as $dish)
                                <div class="w-100 d-flex flex-column gap-1 flex-wrap">
                                    <div class="w-100 d-flex fw-bold justify-content-between align-items-center gap-4 ">
                                        <span>{{ $dish->name }} x {{ $dish->pivot->quantity }}</span>
                                        <span>{{ $dish->price * $dish->pivot->quantity }}&euro;</span>
                                    </div>
                                    @if ($dish->pivot->notes)
                                        <span>Note: {{ $dish->pivot->notes }}</span>
                                    @endif
                                </div>
                                @endforeach
                            @else
                                <span>Nessun piatto è stato prenotato</span>
                            @endif
                        </div>
                    </div>
                    <hr>
                    {{-- Container with the total price --}}
                    <div class="d-flex justify-content-between align-items-center gap-4 fs-5 fw-bold">
                        <span>Totale pagato</span>
                        <span>{{ $order->total_price }}&euro;</span>
                    </div>
                </div>
            </div>
            {{-- Container on the right side of the screen with the info about the user --}}
            <div class="col-xl-5 col-lg-4 col-12 d-flex flex-column gap-4">
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
                {{-- Container with the notes --}}
                <div class="d-flex gap-4 align-items-start border rounded-4 p-4">
                    <i class="fa-regular fa-message fs-3"></i>
                    <div class="d-flex flex-column align-items-start justify-content-start">
                        <span class="fs-5 fw-bold mb-2">Le note di {{ $order->receiver }}</span>
                        <div class="d-flex flex-column align-items-start">
                            @if ($order->notes)
                                <span>{{ $order->notes }}</span>
                            @else
                                <span>Non ha lasciato nessuna nota</span>
                            @endif
                        </div>
                    </div>
                </div>
                {{-- Container with the phone number of the receiver --}}
                <div class="d-flex gap-4 align-items-start border rounded-4 p-4">
                    <i class="fa-solid fa-phone fs-3"></i>
                    <div class="d-flex flex-column align-items-start justify-content-start">
                        <span class="fs-5 fw-bold mb-2">Numero di telefono</span>
                        <div class="d-flex flex-column align-items-start">
                            <span>{{ $order->phone_number }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.modal-delete')
@endsection
