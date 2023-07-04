@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between flex-wrap">
                        <span class="fs-3">Registrazione di un nuovo ristoratore</span>
                        <span class="fs-7 text-warning-emphasis">I campi contrassegnati con * sono obbligatori</span>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-4 row was-validated">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right">Nome e cognome <span class="fs-7 text-warning-emphasis">*</span></label>
                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Dante Alighieri"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @else
                                            <div class="invalid-feedback" role="alert">
                                                Per favore, inserisci il tuo nome e cognome
                                            </div>
                                        @enderror
                                </div>
                            </div>

                            <div class="mb-4 row was-validated">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">E-mail <span class="fs-7 text-warning-emphasis">*</span></label>
                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email" placeholder="dantealighieri@gmail.com"
                                        value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @else
                                        <div class="invalid-feedback" role="alert">
                                            Per favore, inserisci la tua email
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            {{-- aggiungo campo per vat_number --}}
                            <div class="mb-4 row was-validated">
                                <label for="vat_number"
                                    class="col-md-4 col-form-label text-md-right">Partita Iva <span class="fs-7 text-warning-emphasis">*</span></label>
                                <div class="col-md-6">
                                    <input id="vat_number" type="text"
                                        class="form-control @error('vat_number') is-invalid @enderror" name="vat_number" placeholder="12345678912"
                                        value="{{ old('vat_number') }}" required autocomplete="vat_number">
                                    @error('vat_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @else
                                        <div class="invalid-feedback" role="alert">
                                            Per favore, inserisci ila tua partita iva
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            {{-- end campo vat_number --}}

                            <div class="mb-4 row was-validated">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">Password <span class="fs-7 text-warning-emphasis">*</span></label>
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password" placeholder="beatriceforever"
                                        required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @else
                                        <div class="invalid-feedback" role="alert">
                                            Per favore, inserisci la tua password
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row was-validated">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">Conferma password <span class="fs-7 text-warning-emphasis">*</span></label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" placeholder="beatriceforever"
                                        name="password_confirmation" required autocomplete="new-password">
                                    <div class="invalid-feedback" role="alert">
                                        Per favore, inserisci di nuovo la tua password, per conferma
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4 row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
