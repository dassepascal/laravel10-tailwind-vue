<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tailwindcss 3 in Laravel 10 with Vite</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')

</head>

<body class="antialiased bg-red-500">
<div class="container">
    <h1 class="text-white text-center py-5 text-2xl font-extrabold uppercase" >home</h1>

</div>



</body>
</html>
