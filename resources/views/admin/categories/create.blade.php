@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            <h2 class="d-flex flex-column align-items-between flex-wrap mb-4">
                <span class="fs-3">Creazione di una nuova categoria</span>
                <span class="fs-7 text-warning-emphasis">I campi contrassegnati con * sono obbligatori</span>
            </h2>
            <div class="mb-3">
                <label for="name">Nome Categoria <span class="fs-7 text-warning-emphasis">*</span></label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    required maxlength="100" minlength="3">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @else
                    <div class="invalid-feedback" role="alert">
                        Per favore, inserisci il nome della categoria (almeno 3 caratteri)
                    </div>
                @enderror
            </div>
            <div class="mb-3">
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
            <div class="mb-3">
                <label for="class">Nome classe stile <span class="fs-7 text-warning-emphasis">*</span></label>
                <select name="class" id="class" class="form-control @error('class') is-invalid @enderror" required>
                    <option value="text-bg-primary" {{ (old("class") == "text-bg-primary" ? "selected":"") }}>Blu</option>
                    <option value="text-bg-secondary" {{ (old("class") == "text-bg-secondary" ? "selected":"") }}>Grigio</option>
                    <option value="text-bg-success" {{ (old("class") == "text-bg-success" ? "selected":"") }}>Verde</option>
                    <option value="text-bg-danger" {{ (old("class") == "text-bg-danger" ? "selected":"") }}>Rosso</option>
                    <option value="text-bg-warning" {{ (old("class") == "text-bg-warning" ? "selected":"") }}>Giallo</option>
                    <option value="text-bg-info" {{ (old("class") == "text-bg-info" ? "selected":"") }}>Azzurro</option>
                    <option value="text-bg-light" {{ (old("class") == "text-bg-light" ? "selected":"") }}>Bianco</option>
                    <option value="text-bg-dark" {{ (old("class") == "text-bg-dark" ? "selected":"") }}>Nero</option>
                </select>
                @error('class')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @else
                    <div class="invalid-feedback" role="alert">
                        Per favore, seleziona la classe della categoria
                    </div>
                @enderror
            </div>
            <div class="d-flex">
                <div class="mb-3">
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
    {{-- <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script> --}}

    {{-- {!! JsValidator::formRequest('App\Http\Requests\StoreCategoryRequest') !!} --}}
@endsection
