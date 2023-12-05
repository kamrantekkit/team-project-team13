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
<h1 class="h1">Basket</h1>
<div class="container-fluid">
    @foreach($products as $product)
    <div class="row">
        <div class="col-3">
            <img src="{{asset($product["image_path"])}}" width="300px" height="150px">
        </div>
        <div class="col-3">
            <div class="row">
                {{$product["name"]}}
            </div>
            <div class="row">
                {{$product["description"]}}
            </div>
        </div>
        <div class="col-3">
            Price: {{$product["price"]}}
        </div>
        <div class="col-3">
            Quantity: {{$product["quantity"]}}
        </div>
    </div>
    @endforeach
</div>

<footer>
</footer>
</body>
</html>
