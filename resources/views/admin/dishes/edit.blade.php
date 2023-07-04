@extends('layouts.app');
@section('content')
    <div class="container mt-3">
        <h1>Modifica il piatto: {{ $dish->name }}</h1>
        <form action="{{ route('admin.dishes.update', $dish->slug) }}" method="POST">
            @csrf
            @method('PUT')
            @if(Auth::user()->is_admin)
            <div class="mb-3">
                <label for="caterer_id">Scegli il caterer</label>
                <select class="form-select mb-3" name="caterer_id" id="caterer_id">
                    <option value="">Seleziona il caterer</option>
                    @foreach ($caterers as $caterer)
                    <option value="{{$caterer->id}}">{{$caterer->name}}</option>
                    @endforeach
                </select>
            </div>
            @endif
            <div class="mb-3">
                <label for="name">Nome Piatto</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    required maxlength="255" minlength="3" value="{{ old('name', $dish->name) }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image">Immagine</label>
                <input type="text" class="form-control @error('image') is-invalid @enderror" name="image"
                    id="image" value="{{ old('image', $dish->image) }}">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price">Prezzo</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" required
                    id="price" min="0" step="any" value="{{ old('price', $dish->price) }}">
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea name="description" id="description" rows="10" class="form-control">
                    {{ old('description', $dish->description) }}
                </textarea>
            </div>
            <div class="mb-3">
                <label for="tipologies">Tipologie</label>
                <textarea required name="tipologies" id="tipologies" rows="10"
                    class="form-control @error('tipologies') is-invalid @enderror">{{ old('tipologies', $dish->tipologies) }}</textarea>
                @error('tipologies')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-check">
                <p>Visibile sul sito?</p>
                <input class="form-check-input" type="radio" name="visible" id="true" value="true"
                    {{ $dish->visible === 1 ? 'checked' : '' }}>
                <label class="form-check-label" for="true">
                    Sì
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="visible" id="false" value="false"
                    {{ $dish->visible === 0 ? 'checked' : '' }}>
                <label class="form-check-label" for="false">
                    No
                </label>
            </div>
            @error('visible')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-success">Save</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(nicEditors.allTextAreas);
    </script>
@endsection
