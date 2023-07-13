@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3 mt-3">
            <h1>Ordini</h1>
        </div>

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Destinatario</th>
                    <th scope="col">Numero di telefono</th>
                    <th scope="col">Stato</th>
                    <th scope="col">Note</th>
                    <th scope="col">Prezzo totale</th>
                    <th scope="col">Indirizzo</th>
                    <th scope="col">Creazione</th>
                    <th scope="col">Ultima modifica</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <th scope="row">
                            {{ $order->id }}
                        </th>
                        <td>
                            {{ $order->receiver }}
                        </td>
                        <td>
                            {{ $order->phone_number }}
                        </td>
                        <td>
                            {{ $order->status }}
                        </td>
                        <td>
                            {{ $order->notes }}
                        </td>
                        <td>
                            {{ $order->total_price }}
                        </td>
                        <td>
                            {{ $order->address }}
                        </td>
                        <td>
                            {{ \Carbon\Carbon::parse($order->created_at)->format('d/m/Y H:i') }}
                        </td>
                        <td>
                            {{ \Carbon\Carbon::parse($order->updated_at)->format('d/m/Y H:i') }}
                        </td>
                        <td>
                            <div class="d-flex justify-content-between align-items-center gap-2">
                                <a href="{{ route('admin.orders.show', $order->id) }}"
                                    class="btn btn-primary text-white"><i class="fa-solid fa-eye"></i></a>
                                <a href="{{ route('admin.orders.edit', $order->id) }}"
                                    class="btn btn-warning text-white"><i class="fa-solid fa-pencil"></i></a>
                                <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type='submit' class="delete-button btn btn-danger text-white"
                                        data-item-title="{{ $order->receiver }}"> <i class="fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $orders->links('vendor.pagination.bootstrap-5') }}
    </div>

    @include('partials.modal-delete')
@endsection
