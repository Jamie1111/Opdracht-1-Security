<x-main>
    <section class="section">
        <div class="container">
            <h1 class="title">Welkom terug, {{ Auth::user()->name }}!</h1>
            <p class="subtitle">Je bent succesvol ingelogd op het dashboard van DutchGroceries.</p>
        </div>
    </section>
</x-main>
