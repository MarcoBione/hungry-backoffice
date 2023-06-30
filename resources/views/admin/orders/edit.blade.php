@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-3 mb-3">Modifica ordine {{ $order->id }} creato da {{ $order->receiver }} il {{ $order->created_at }}</h1>
        <form action="{{ route('admin.orders.update', $order->id) }}" method="POST" enctype="multipart/form-data" class="pb-4">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="status" class="form-label fs-5">Stato dell'ordine</label>
                <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                    <option value="In attesa di conferma" {{ (old("status", $order->status) == "In attesa di conferma" ? "selected":"") }}>In attesa di conferma</option>
                    <option value="Ordine confermato" {{ (old("status", $order->status) == "Ordine confermato" ? "selected":"") }}>Ordine confermato</option>
                    <option value="Pagato" {{ (old("status", $order->status) == "Pagato" ? "selected":"") }}>Pagato</option>
                    <option value="In preparazione" {{ (old("status", $order->status) == "In preparazione" ? "selected":"") }}>In preparazione</option>
                    <option value="In consegna" {{ (old("status", $order->status) == "In consegna" ? "selected":"") }}>In consegna</option>
                    <option value="Consegnato" {{ (old("status", $order->status) == "Consegnato" ? "selected":"") }}>Consegnato</option>
                    <option value="Indirizzo di consegna errato" {{ (old("status", $order->status) == "Indirizzo di consegna errato" ? "selected":"") }}>Indirizzo di consegna errato</option>
                </select>
                @error('status')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="address" class="form-label fs-5">Indirizzo di consegna</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address"
                    id="address" value="{{ old('address', $order->address) }}">
                @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="total_price" class="form-label fs-5">Prezzo totale (&euro;)</label>
                <input type="number" step="0.01" value="{{ old('total_price', $order->total_price) }}"
                    class="form-control @error('total_price') is-invalid @enderror" id="total_price" name="total_price" min="0.1"
                    max="9999.99">
                @error('total_price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Conferma</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
@endsection
