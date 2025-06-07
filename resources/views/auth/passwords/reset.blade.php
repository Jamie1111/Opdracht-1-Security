<x-main>
    <section class="section">
        <div class="container">
            <h1 class="title">Wachtwoord resetten</h1>

            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="field">
                    <label class="label" for="email">Email</label>
                    <div class="control">
                        <input class="input" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                    </div>
                    @error('email')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="field">
                    <label class="label" for="password">Nieuw wachtwoord</label>
                    <div class="control">
                        <input class="input" id="password" type="password" name="password" required>
                    </div>
                    <p class="help">Gebruik een sterk wachtwoord (minimaal 12 tekens, hoofdletters, cijfers & symbolen)</p>
                    @error('password')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="field">
                    <label class="label" for="password_confirmation">Bevestig wachtwoord</label>
                    <div class="control">
                        <input class="input" id="password_confirmation" type="password" name="password_confirmation" required>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-primary">
                            Wachtwoord resetten
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-main>
