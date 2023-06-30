@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="p-5 d-flex justify-content-end">
            <a href="{{ route('admin.categories.index') }}" class="btn btn-success">Torna a categorie</a>
        </div>
        <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name">Nome Categoria</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    required maxlength="100" minlength="3" value="{{ old('name', $category->name) }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description"
                    value="{{ old('description', $category->description) }}" id="description"></textarea>

                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="class">Nome classe stile</label>
                <input type="text" class="form-control @error('class') is-invalid @enderror" name="class"
                    id="class" value="{{ old('class', $category->class) }}">
                @error('class')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image">Immagine categoria</label>
                <input type="text" class="form-control @error('image') is-invalid @enderror" name="image"
                    id="image" value="{{ old('image', $category->image) }}">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Conferma</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
        <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
        <script type="text/javascript">
            bkLib.onDomLoaded(nicEditors.allTextAreas);
        </script>
    </div>
@endsection
