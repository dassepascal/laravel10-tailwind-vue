<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tailwindcss 3 in Laravel 10 with Vite</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body id="app" class="antialiased bg-red-500">
<div class="container">
    <section>

        <div class="flex justify-center items-center h-screen">
            <div class="text-center">
                <h1 class="text-white   text-4xl font-extrabold uppercase" >Welcome to Tailwindcss 3 in Laravel 10 with Vite</h1>
                <increment-counter></increment-counter>
    </section>
   

</div>



</body>
</html>
