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
<main>
    <div class="container-fluid">
        @foreach($productRows as $productRow)
            <div class="row ">
                @foreach($productRow as $product)
                    <div class="col-3 d-flex justify-content-center ">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{$product['image_path']}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product['name'] }}</h5>
                                <p class="card-text">{{$product['description']}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</main>
<footer>
</footer>
</body>
</html>
