@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <form action="{{ route('admin.caterers.update', $caterer->slug) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2 class="d-flex flex-column align-items-between flex-wrap mb-4">
                <span class="fs-3">Modifica ristorante <strong>{{ $caterer->name }}</strong></span>
                <span class="fs-7 text-warning-emphasis">I campi contrassegnati con * sono obbligatori</span>
            </h2>
            <div class="mb-3 was-validated">
                <label for="name">Nome <span class="fs-7 text-warning-emphasis">*</span></label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    required maxlength="150" minlength="3" value="{{ old('name', $caterer->name) }}" required>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @else
                        <div class="invalid-feedback" role="alert">
                            Per favore, inserisci il nome del ristorante
                        </div>
                    @enderror
            </div>
            <div class="mb-3 was-validated">
                <label for="address">Indirizzo <span class="fs-7 text-warning-emphasis">*</span></label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address"
                    id="address" value="{{ old('name', $caterer->address) }}" required>
                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @else
                        <div class="invalid-feedback" role="alert">
                            Per favore, inserisci l'indirizzo del ristorante
                        </div>
                    @enderror
            </div>
            <div class="mb-3 was-validated">
                <label for="image">Immagine <span class="fs-7 text-warning-emphasis">*</span></label>
                <input type="text" class="form-control @error('image') is-invalid @enderror" name="image"
                    id="image" value="{{ old('name', $caterer->image) }}" required>
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @else
                        <div class="invalid-feedback" role="alert">
                            Per favore, inserisci l'immagine di copertina del ristorante
                        </div>
                    @enderror
            </div>
            <div class="mb-3 was-validated">
                <label for="phone_number">Numero di telefono <span class="fs-7 text-warning-emphasis">*</span></label>
                <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number"
                    id="phone_number" value="{{ old('name', $caterer->phone_number) }}" required>
                    @error('phone_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @else
                        <div class="invalid-feedback" role="alert">
                            Per favore, inserisci il numero di telefono del ristorante
                        </div>
                    @enderror
            </div>
            <div class="col form-group mb-3 was-validated">
                <p>Seleziona una o più Categorie</p>
                @foreach ($categories as $category)
                    <div>
                        @if ($errors->any())
                            <input type="checkbox" name="categories[]" value="{{ $category->id }}" class="form-check-input"
                                {{ in_array($category->id, old('categories', [])) ? 'checked' : '' }}>
                        @else
                            <input type="checkbox" name="categories[]" value="{{ $category->id }}" class="form-check-input"
                                {{ $caterer->categories->contains($category) ? 'checked' : '' }}>
                        @endif
                        <label for="" class="form-check-label">{{ $category->name }}</label>
                    </div>
                @endforeach
                @error('categories')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @else
                    <div class="invalid-feedback" role="alert">
                        Per favore, seleziona le categorie di appartenenza del ristorante
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Save</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
        <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
        <script type="text/javascript">
            bkLib.onDomLoaded(nicEditors.allTextAreas);
        </script>
    </div>
    <!-- Javascript Requirements -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <!-- Laravel Javascript Validation -->
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

    {!! JsValidator::formRequest('App\Http\Requests\UpdateCatererRequest') !!}
@endsection
