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
                        <h3>Le vendite dell'ultimo anno</h3>
                        {{-- <div > --}}
                            <div class="chart-container" style="position: relative; height:80%; width:100%"><canvas id="acquisitions"></canvas></div>
                        {{-- </div> --}}
                    </div>
                    {{-- il contenuto della pagina andrebbe qua! --}}

                </div>
            </div>
        </div>
    </div>
</div>
 <script type="text/javascript">
let Gen = {{ Js::from($gennaio) }};
let Feb = {{ Js::from($febbraio) }};
let Mar = {{ Js::from($marzo) }};
let Apr = {{ Js::from($aprile) }};
let Mag = {{ Js::from($maggio) }};
let Giu = {{ Js::from($giugno) }};
let Lug = {{ Js::from($luglio) }};
let Ago = {{ Js::from($agosto) }};
let Sep = {{ Js::from($settembre) }};
let Ott = {{ Js::from($ottobre) }};
let Nov = {{ Js::from($novembre) }};
let Dic = {{ Js::from($dicembre) }};
</script>
@vite(['resources/js/acquisitions.js'])

@endsection
