@extends('layouts.app');
@section('content')
    <div class="container mt-3">
        <h1>Aggiungi un piatto</h1>
        <form action="{{ route('admin.dishes.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name">Nome Piatto</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    required maxlength="255" minlength="3">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image">Immagine</label>
                <input type="text" class="form-control @error('image') is-invalid @enderror" name="image"
                    id="image">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" required
                    id="price">
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea name="description" id="description" rows="10"
                    class="form-control @error('description') is-invalid @enderror"></textarea>
                {{-- @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror --}}
            </div>
            <div class="mb-3">
                <label for="tipologies">Tipologie</label>
                <textarea name="tipologies" id="tipologies" rows="10"
                    class="form-control @error('tipologies') is-invalid @enderror" required></textarea>
                {{-- @error('tipologies')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror --}}
            </div>
            <div class="form-check">
                <p>Visibile sul sito?</p>
                <input class="form-check-input" type="radio" name="visible" id="false">
                <label class="form-check-label" for="false">
                    No
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="visible" id="true" checked>
                <label class="form-check-label" for="true">
                    Sì
                </label>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
    {{-- <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(nicEditors.allTextAreas);
    </script> --}}
@endsection
