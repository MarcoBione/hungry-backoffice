@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('admin.orders.update', $order->id) }}" method="POST" enctype="multipart/form-data" class="pb-4">
            @csrf
            @method('PUT')
            <h2 class="mt-3 mb-3">Modifica <strong>ordine {{ $order->id }}</strong> creato da <strong>{{ $order->receiver }}</strong> il <strong>{{ $order->created_at }}</strong></h2>
            <div class="mb-3 was-validated">
                <label for="status" class="form-label fs-5">Stato dell'ordine <span class="fs-7 text-warning-emphasis">*</span></label>
                <select name="status" id="status" class="form-control @error('status') is-invalid @enderror" required>
                    <option value="In attesa di conferma" {{ (old("status", $order->status) == "In attesa di conferma" ? "selected":"") }}>In attesa di conferma</option>
                    <option value="Ordine confermato" {{ (old("status", $order->status) == "Ordine confermato" ? "selected":"") }}>Ordine confermato</option>
                    <option value="Pagato" {{ (old("status", $order->status) == "Pagato" ? "selected":"") }}>Pagato</option>
                    <option value="In preparazione" {{ (old("status", $order->status) == "In preparazione" ? "selected":"") }}>In preparazione</option>
                    <option value="In consegna" {{ (old("status", $order->status) == "In consegna" ? "selected":"") }}>In consegna</option>
                    <option value="Consegnato" {{ (old("status", $order->status) == "Consegnato" ? "selected":"") }}>Consegnato</option>
                    <option value="Indirizzo di consegna errato" {{ (old("status", $order->status) == "Indirizzo di consegna errato" ? "selected":"") }}>Indirizzo di consegna errato</option>
                </select>
                @error('status')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @else
                    <div class="invalid-feedback" role="alert">
                        Per favore, seleziona lo stato dell'ordine
                    </div>
                @enderror
            </div>
            <div class="mb-3 was-validated">
                <label for="address" class="form-label fs-5">Indirizzo di consegna <span class="fs-7 text-warning-emphasis">*</span></label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address"
                    id="address" value="{{ old('address', $order->address) }}" required>
                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @else
                    <div class="invalid-feedback" role="alert">
                        Per favore, indica l'indirizzo dove effettuare la consegna
                    </div>
                @enderror
            </div>
            <div class="mb-3 was-validated">
                <label for="total_price" class="form-label fs-5">Prezzo totale (&euro;) <span class="fs-7 text-warning-emphasis">*</span></label>
                <input type="number" step="0.01" value="{{ old('total_price', $order->total_price) }}"
                    class="form-control @error('total_price') is-invalid @enderror" id="total_price" name="total_price" min="0.1" step="0.1"
                    max="9999.99" required>
                @error('total_price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @else
                    <div class="invalid-feedback" role="alert">
                        Per favore, indica il prezzo totale dell'ordine
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Conferma</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
    <!-- Javascript Requirements -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <!-- Laravel Javascript Validation -->
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

    {!! JsValidator::formRequest('App\Http\Requests\UpdateOrderRequest') !!}
@endsection
