<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('titre')</title>
</head>
<body class="bg-yellow-100 bg-opacity-50">
    <div id="navbar" class="flex ">
        <div id="logo">
            <img src="{{ asset('storage/Images/EventHandler.svg') }}" alt="logo" class="w-56 h-auto">
        </div>
        <div id="lien" class="absolute flex top-5 lg:right-16 sm:right-0">
            <ul class="flex">
                <li class="mr-1 transition-all duration-700 hover:bg-green-500">Home</li>
                <li class="mr-1 transition-all duration-700 hover:bg-green-500">Contact</li>
            </ul>
            <span class="mr-1">|</span>
            <ul class="flex">
                <li class="mr-1"><img src="" alt="imageProfile"/></li>
                <li class="mr-1 transition-all duration-700 hover:bg-green-500">Login</li>
                <li class="mr-1 transition-all duration-700 hover:bg-green-500">Register</li>
            </ul>
        </div>
    </div>
    <div id="content">
        @yield('contenu')
    </div>
</body>
</html>
