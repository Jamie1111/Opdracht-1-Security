<x-main>
    <section class="section">
        <div class="container">
            <div class="column is-half is-offset-one-quarter">
                <h1 class="title has-text-centered">Registreren</h1>

                @if ($errors->any())
                    <div class="notification is-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="field">
                        <label class="label">Naam</label>
                        <div class="control">
                            <input class="input" type="text" name="name" required>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">E-mailadres</label>
                        <div class="control">
                            <input class="input" type="email" name="email" required>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Wachtwoord</label>
                        <div class="control">
                            <input class="input" type="password" name="password" required>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Bevestig wachtwoord</label>
                        <div class="control">
                            <input class="input" type="password" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="field">
                        <div class="control">
                            <button class="button is-primary is-fullwidth">Registreren</button>
                        </div>
                    </div>
                </form>

                <p class="has-text-centered mt-4">
                    Al een account?
                    <a href="{{ route('login') }}">Log in</a>
                </p>
            </div>
        </div>
    </section>
</x-main>
