<x-main>
    <section class="section">
        <div class="container">
            <div class="column is-half is-offset-one-quarter">
                <h1 class="title has-text-centered">Inloggen</h1>

                @if ($errors->any())
                    <div class="notification is-danger">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="field">
                        <label class="label">E-mailadres</label>
                        <div class="control">
                            <input class="input" type="email" name="email" required autofocus>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Wachtwoord</label>
                        <div class="control">
                            <input class="input" type="password" name="password" required>
                        </div>
                    </div>

                    <div class="field">
                        <label class="checkbox">
                            <input type="checkbox" name="remember">
                            Onthoud mij
                        </label>
                    </div>

                    <div class="field">
                        <div class="control">
                            <button class="button is-primary is-fullwidth">Login</button>
                        </div>
                    </div>
                </form>

                <p class="has-text-centered mt-4">
                    Nog geen account?
                    <a href="{{ route('register') }}">Registreer hier</a>
                </p>
            </div>
        </div>
    </section>
</x-main>
