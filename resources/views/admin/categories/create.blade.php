@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h2 class="d-flex flex-column align-items-between flex-wrap mb-4">
                <span class="fs-3">Creazione di una nuova categoria</span>
                <span class="fs-7 text-warning-emphasis">I campi contrassegnati con * sono obbligatori</span>
            </h2>
            <div class="mb-3 was-validated">
                <label for="name">Nome Categoria <span class="fs-7 text-warning-emphasis">*</span></label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    required maxlength="100" minlength="3">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @else
                    <div class="invalid-feedback" role="alert">
                        Per favore, inserisci il nome della categoria
                    </div>
                @enderror
            </div>
            <div class="mb-3 was-validated">
                <label for="description">Descrizione</label>
                <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description"
                    id="description"></textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @else
                    <div class="invalid-feedback" role="alert">
                        Per favore, inserisci la descrizione della categoria
                    </div>
                @enderror
            </div>
            <div class="mb-3 was-validated">
                <label for="class">Nome classe stile <span class="fs-7 text-warning-emphasis">*</span></label>
                <input type="text" class="form-control @error('class') is-invalid @enderror" name="class" id="class" required>
                @error('class')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @else
                    <div class="invalid-feedback" role="alert">
                        Per favore, inserisci la classe della categoria
                    </div>
                @enderror
            </div>
            <div class="d-flex">
                <div class="mb-3 was-validated">
                    <label for="image">Immagine categoria <span class="fs-7 text-warning-emphasis">*</span></label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" required>
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @else
                        <div class="invalid-feedback" role="alert">
                            Per favore, inserisci l'immagine
                        </div>
                    @enderror
                </div>
                <div class="media ms-4">
                    <img id="uploadPreview" class="rounded" width="150"
                        src="https://via.placeholder.com/300x200">
                </div>
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

    {!! JsValidator::formRequest('App\Http\Requests\StoreCategoryRequest') !!}
@endsection
