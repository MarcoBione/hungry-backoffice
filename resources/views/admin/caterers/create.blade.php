@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <form action="{{ route('admin.caterers.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name">Nome Ristorante</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    required maxlength="150" minlength="3">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="address">Indirizzo</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address"
                    id="address">
                @error('address')
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
                <label for="phone_number">Numero Telefonico</label>
                <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number"
                    id="phone_number">
                @error('speed')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col form-group mb-3">
                <p>Seleziona una o più Categorie</p>
                @foreach ($categories as $category)
                    <div>
                        <input type="checkbox" name="categories[]" value="{{ $category->id }}" class="form-check-input"
                            {{ in_array($category->id, old('categories', [])) ? 'checked' : '' }}>
                        <label for="" class="form-check-label">{{ $category->name }}</label>
                    </div>
                @endforeach
                @error('categories')
                    <div class="invalid-feedback">{{ $message }}</div>
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
@endsection