@extends('layouts.app')

@section('content')

<div class="container">

    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>

    <div class="row justify-content-center">

        <div class="col">

            <div class="card">

                {{-- aggiunta barra di navigazione lato amministrazione, segnaposto per navbar --}}
                <div class="card-header">
                    @include('admin.header.navbar')
                </div>
                {{-- end aggiunta barra di navigazione lato amministrazione, segnaposto per navbar --}}

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="text-center text-black-50">
                        {{ __('Benvenuto nella tua area di amministrazione!') }}
                    </div>

                    {{-- il contenuto della pagina andrebbe qua! --}}
                    <div class="card-body">
                        {{-- codee.. --}}
                        <p>Le statistiche dei tuoi ordini:</p>

                        <div style="width: 800px;"><canvas id="acquisitions"></canvas></div>

                    </div>
                    {{-- il contenuto della pagina andrebbe qua! --}}

                </div>

            </div>

        </div>



    </div>
</div>

@vite(['resources/js/acquisitions.js'])

@endsection
