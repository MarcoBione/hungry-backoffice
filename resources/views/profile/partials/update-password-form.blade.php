<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6 needs-validation" novalidate>
        @csrf
        @method('put')

        <div class="mb-2">
            <label for="current_password">Password attuale <span class="fs-7 text-warning-emphasis">*</span></label>
            <input class="mt-1 form-control" type="password" name="current_password" id="current_password" autocomplete="current-password" required>
            @error('current_password')
                <span class="invalid-feedback mt-2" role="alert">
                    <strong>{{ $errors->updatePassword->get('current_password') }}</strong>
                </span>
            @else
                <div class="invalid-feedback mt-2" role="alert">
                    Per favore, inserisci la password
                </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="password">Nuova password <span class="fs-7 text-warning-emphasis">*</span></label>
            <input class="mt-1 form-control" type="password" name="password" id="password" autocomplete="new-password" minlength="8" required>
            @error('password')
                <span class="invalid-feedback mt-2" role="alert">
                    <strong>{{ $errors->updatePassword->get('password')}}</strong>
                </span>
            @else
                <div class="invalid-feedback mt-2" role="alert">
                    Per favore, inserisci la nuova password
                </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="password-confirm">Conferma la nuova password <span class="fs-7 text-warning-emphasis">*</span></label>
            <input class="mt-2 form-control" type="password" name="password-confirm" id="password-confirm" autocomplete="new-password" minlength="8" required>
            @error('password-confirm')
                <span class="invalid-feedback mt-2" role="alert">
                    <strong>{{ $errors->updatePassword->get('password-confirm')}}</strong>
                </span>
            @else
                <div class="invalid-feedback mt-2" role="alert">
                    Per favore, inserisci la stessa password del campo precedente
                </div>
            @enderror
        </div>

        <div class="d-flex align-items-center gap-4">
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>

            @if (session('status') === 'password-updated')
            <script>
                const show = true;
                setTimeout(() => show = false, 2000)
                const el = document.getElementById('status')
                if (show) {
                    el.style.display = 'block';
                }
            </script>
            <p id='status' class=" fs-5 text-muted">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
