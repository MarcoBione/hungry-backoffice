@extends('layouts.app');
@section('content')
    <div class="container mt-3">
        <form action="{{ route('admin.dishes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h2 class="d-flex flex-column align-items-between flex-wrap mb-4">
                <span class="fs-3">Creazione di un nuovo piatto</span>
                <span class="fs-7 text-warning-emphasis">I campi contrassegnati con * sono obbligatori</span>
            </h2>
            @if (Auth::user()->is_admin)
                <div class="mb-3 was-validated">
                    <label for="caterer_id">Scegli il ristorante nel quale associare il piatto <span
                            class="fs-7 text-warning-emphasis">*</span></label>
                    <select class="form-select mb-3" name="caterer_id" id="caterer_id">
                        <option value="">Seleziona il caterer</option>
                        @foreach ($caterers as $caterer)
                            <option value="{{ $caterer->id }}">{{ $caterer->name }}</option>
                        @endforeach
                    </select>
                </div>
            @endif
            <div class="mb-3 was-validated">
                <label for="name">Nome Piatto <span class="fs-7 text-warning-emphasis">*</span></label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    required maxlength="255" minlength="3">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @else
                    <div class="invalid-feedback" role="alert">
                        Per favore, inserisci il nome del piatto
                    </div>
                @enderror
            </div>
            <div class="d-flex">
                <div class="mb-3 was-validated">
                    <label for="image">Immagine</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                        id="image">
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @else
                        <div class="invalid-feedback" role="alert">
                            Per favore, inserisci l'immagine del piatto
                        </div>
                    @enderror
                </div>
                <div class="media ms-4">
                    <img id="uploadPreview" class="rounded" width="150"
                        src="https://via.placeholder.com/300x200">
                </div>
            </div>
            <div class="mb-3 was-validated">
                <label for="price">Prezzo <span class="fs-7 text-warning-emphasis">*</span></label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" required
                    id="price" min="0.10" step="0.10" max="9999.99">
                @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @else
                    <div class="invalid-feedback" role="alert">
                        Per favore, inserisci il prezzo del piatto
                    </div>
                @enderror
            </div>
            <div class="mb-3 was-validated">
                <label for="description">Descrizione</label>
                <textarea name="description" id="description" rows="10" class="form-control"></textarea>
            </div>
            <div class="mb-3 was-validated">
                <label for="tipologies">Tipologie <span class="fs-7 text-warning-emphasis">*</span></label>
                <textarea name="tipologies" id="tipologies" rows="10" class="form-control @error('tipologies') is-invalid @enderror" required></textarea>
                @error('tipologies')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @else
                    <div class="invalid-feedback" role="alert">
                        Per favore, inserisci la tipologia del piatto
                    </div>
                @enderror
            </div>
            <div class="form-check was-validated">
                <p>Visibile sul sito?</p>
                <input class="form-check-input" type="radio" name="visible" id="true" value="true">
                <label class="form-check-label" for="true">
                    Sì
                </label>
            </div>
            <div class="form-check was-validated">
                <input class="form-check-input" type="radio" name="visible" id="false" value="false" checked>
                <label class="form-check-label" for="false">
                    No
                </label>
            </div>
            @error('visible')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @else
                <div class="invalid-feedback" role="alert">
                    Per favore, inserisci la visibilità del piatto
                </div>
            @enderror
            <button type="submit" class="btn btn-success">Save</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>

    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(nicEditors.allTextAreas);
    </script>
    <!-- Javascript Requirements -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <!-- Laravel Javascript Validation -->
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>

    {!! JsValidator::formRequest('App\Http\Requests\StoreDishRequest') !!}
@endsection
