@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
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
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->class }}</td>
                        <td>{{ $category->image }}</td>
                        <td>
                            <a href="{{ route('admin.categories.show', $category->id) }}">Show</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
