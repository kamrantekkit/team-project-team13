<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss','resources\css\test.css'])
</head>
<body>
<main>
    <h1 class="h1 text-primary">hello</h1>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2 class="h2">I am col 1</h2>
            </div>
            <div class="col-6">
                <h2 class="h2">I am col 2</h2>
            </div>
        </div>
    </div>
</main>

<footer>

</footer>
</body>
</html>
