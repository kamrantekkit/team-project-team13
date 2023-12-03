<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss'])
</head>
<body>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <form method="GET" action="{{route("products", [$Category])}}">

                    <h6 class="p-1 border-bottom">Genre</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="tags[]" id="action" value="5">
                        <label class="form-check-label" for="action">Action</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="tags[]" id="adventure" value="6">
                        <label class="form-check-label" for="adventure">adventure</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
            <div class="col-10">
                <div class="row">
                    @if($productPages->isEmpty())
                       <h2>Empty</h2>
                    @else
                        @foreach($productPages as $product)
                            <div class="col-3 justify-content-center">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="{{asset($product['image_path'])}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product['name'] }}</h5>
                                        <p class="card-text">{{$product['description']}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            {{ $productPages->links('pagination::bootstrap-5') }}
        </div>
    </div>
</main>
<footer>
</footer>
</body>
</html>
