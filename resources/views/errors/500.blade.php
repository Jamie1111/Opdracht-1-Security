<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>500 - Interne serverfout</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-300 flex items-center justify-center min-h-screen">
<div class="text-center p-6">
    <h1 class="text-9xl font-extrabold text-black-600 mb-20">500</h1>
    <h2 class="text-3xl font-semibold text-gray-800 mb-2">Interne Serverfout</h2>
    <p class="text-lg text-gray-600 mb-6">
        Er is iets fout ontstaan aan onze kant <br>
        Wij werken eraan om dit probleem op te lossen<br>
        Dit ligt niet an u<br>
        Probeer het later opnieuw
    </p>
    <a href="{{ url()->previous() }}"
       class="inline-block bg-white hover:bg-blue-700 text-black text-sm font-medium px-6 py-3 rounded transition">
        Opnieuw Proberen
    </a>
</div>
</body>
</html>
