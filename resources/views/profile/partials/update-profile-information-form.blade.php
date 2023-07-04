<section>
    <header>
        <h2 class="text-secondary">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-muted">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="mb-2 was-validated">
            <label for="name">Nome e cognome <span class="fs-7 text-warning-emphasis">*</span></label>
            <input class="form-control" type="text" name="name" id="name" autocomplete="name" value="{{old('name', $user->name)}}" required autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->get('name')}}</strong>
                </span>
            @else
                <div class="invalid-feedback" role="alert">
                    Per favore, inserisci il tuo nome e cognome
                </div>
            @enderror
        </div>

        <div class="mb-2 was-validated">
            <label for="email">E-mail <span class="fs-7 text-warning-emphasis">*</span></label>

            <input id="email" name="email" type="email" class="form-control" value="{{ old('email', $user->email)}}" required autocomplete="username" />

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->get('email')}}</strong>
                </span>
            @else
                <div class="invalid-feedback" role="alert">
                    Per favore, inserisci la tua email
                </div>
            @enderror

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div>
                <p class="text-sm mt-2 text-muted">
                    {{ __('Your email address is unverified.') }}

                    <button form="send-verification" class="btn btn-outline-dark">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                <p class="mt-2 text-success">
                    {{ __('A new verification link has been sent to your email address.') }}
                </p>
                @endif
            </div>
            @endif
        </div>

        {{-- aggiungo campo di aggiornamento partitaiva vat_number --}}

        <div class="mb-2 was-validated">
            <label for="vat_number">Partita Iva <span class="fs-7 text-warning-emphasis">*</span></label>
            <input class="form-control" type="text" name="vat_number" id="vat_number" autocomplete="vat_number" value="{{old('vat_number', $user->vat_number)}}" required autofocus>
            @error('vat_number')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->get('vat_number')}}</strong>
                </span>
            @else
                <div class="invalid-feedback" role="alert">
                    Per favore, inserisci ila tua partita iva
                </div>
            @enderror
        </div>

        {{-- aggiungo campo di aggiornamento partitaiva vat_number --}}

        <div class="d-flex align-items-center gap-4">
            <button class="btn btn-primary" type="submit">{{ __('Save') }}</button>

            @if (session('status') === 'profile-updated')
            <script>
                const show = true;
                setTimeout(() => show = false, 2000)
                const el = document.getElementById('profile-status')
                if (show) {
                    el.style.display = 'block';
                }
            </script>
            <p id='profile-status' class="fs-5 text-muted">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
