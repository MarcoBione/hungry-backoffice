@extends('layouts.app')

@section('content')
    <div class="container">
        @if (auth()->user()->is_admin)
        <div class="pt-4 d-flex justify-content-end">
            <a href="{{ route('admin.categories.create') }}" class="btn btn-success text-capitalize">crea nuova
                categoria</a>
        </div>
        @endif
        <table class="table">
            <thead>
                <tr class="text-capitalize">
                    <th scope="col">nome categoria</th>
                    <th scope="col">descrizione</th>
                    <th scope="col">stile</th>
                    <th scope="col">img</th>
                    <th scope="col">azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr class="align-middle fw-bold">
                        <td>{{ $category->name }}</td>
                        <td>
                            <div class="container-text">
                                {!! $category->description !!}
                            </div>
                        </td>
                        <td><span class="text-info">{{ $category->class }}</span></td>
                        <td class="w-25"><img class="img-fluid img-thumbnail" src="{{ asset('storage/' . $category->image) }}" alt="{{$category->name}}">
                        </td>
                        <td>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('admin.categories.show', $category->id) }}"
                                    class="btn btn-primary text-white"><i class="fa-solid fa-eye"></i></a>
                                @if (auth()->user()->is_admin)
                                    <a href="{{ route('admin.categories.edit', $category->id) }}"
                                        class="btn btn-warning text-white"><i class="fa-solid fa-pencil"></i></a>
                                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type='submit' class="delete-button btn btn-danger text-white"
                                            data-item-title="{{ $category->name }}"> <i class="fa-solid fa-trash"></i></button>
                                    </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="fixed-bottom ">
        {{ $categories->links('vendor.pagination.bootstrap-5') }}
    </div>
    @include('partials.modal-delete')
@endsection
