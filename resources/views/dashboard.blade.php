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

                    {{ __('You are logged in!') }}

                    {{-- il contenuto della pagina andrebbe qua! --}}
                    <div>
                        {{-- codee.. --}}
                        qua metto cio che voglio vedere in dashboard
                    </div>
                    {{-- il contenuto della pagina andrebbe qua! --}}
                </div>


            </div>

        </div>

    </div>
</div>
@endsection
