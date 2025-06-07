<x-main>
    <section class="section">
        <div class="container">
            <h1 class="title">Wachtwoord vergeten</h1>

            @if (session('status'))
                <div class="notification is-success">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="field">
                    <label class="label" for="email">Email</label>
                    <div class="control">
                        <input class="input" id="email" type="email" name="email" required autofocus>
                    </div>
                    @error('email')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-primary">
                            Verstuur resetlink
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-main>
