@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <form action="{{ route('admin.caterers.update', $caterer->slug) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name">Nome Ristorante *</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    required maxlength="150" minlength="3" value="{{ old('name', $caterer->name) }}" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="address">Indirizzo *</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address"
                    id="address" value="{{ old('name', $caterer->address) }}" required>
                @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image">Immagine *</label>
                <input type="text" class="form-control @error('image') is-invalid @enderror" name="image"
                    id="image" value="{{ old('name', $caterer->image) }}" required>
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="phone_number">Numero Telefonico *</label>
                <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number"
                    id="phone_number" value="{{ old('name', $caterer->phone_number) }}" required>
                @error('speed')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col form-group mb-3">
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
