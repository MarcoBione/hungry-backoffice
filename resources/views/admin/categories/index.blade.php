@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="p-5 d-flex justify-content-end">
            <a href="{{ route('admin.categories.create') }}" class="btn btn-success text-capitalize">crea nuova
                categoria</a>
        </div>
        <table class="table">
            <thead>
                <tr class="text-capitalize">
                    <th scope="col">nome categoria</th>
                    <th scope="col">descrizione</th>
                    <th scope="col">stile</th>
                    <th scope="col">img</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{!! $category->description !!}</td>
                        <td>{{ $category->class }}</td>
                        <td>{{ $category->image }}</td>
                        <td>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('admin.categories.show', $category->id) }}"
                                    class="btn btn-primary text-white"><i class="fa-solid fa-eye"></i></a>
                                <a href="{{ route('admin.categories.edit', $category->id) }}"
                                    class="btn btn-warning text-white"><i class="fa-solid fa-pencil"></i></a>
                                <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type='submit' class="delete-button btn btn-danger text-white"
                                        data-item-title="{{ $category->name }}"> <i class="fa-solid fa-trash"></i></button>
                                </form>
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
