<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss'])
</head>
<body>
    <h1 class="h1">hello</h1>

    <a href="{{ route("products",["playstation"]) }}">playstation products</a>
    <a href="{{ route("product-creator") }}">editor</a>

<footer>

</footer>
</body>
</html>
