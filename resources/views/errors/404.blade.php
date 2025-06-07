<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Pagina niet gevonden</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-300 flex items-center justify-center min-h-screen">
<div class="text-center p-6">
    <h1 class="text-9xl font-extrabold text-black-600 mb-20">404</h1>
    <h2 class="text-3xl font-semibold text-gray-800 mb-2">Pagina niet gevonden</h2>
    <p class="text-lg text-gray-600 mb-6">
        De pagina waar u op heeft geklikt bestaat niet of is verwijderd.
    </p>
    <a href="{{ url()->previous() }}"
       class="inline-block bg-white hover:bg-blue-700 text-black text-sm font-medium px-6 py-3 rounded transition">
        Teruggaan
    </a>
</div>
</body>
</html>
