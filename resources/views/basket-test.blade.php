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
    <div class="row">
        <div class="col-6">
            @foreach($products as $product)
                <div class="row">
                    <div class="col-5">
                        <img src="{{asset($product["image_path"])}}" width="300px" height="150px">
                    </div>
                    <div class="col-5">
                        <div class="row">
                            {{$product["name"]}}
                        </div>
                        <div class="row">
                            {{$product["description"]}}
                        </div>
                    </div>
                    <div class="col-1">
                        Price: {{$product["price"]}}
                    </div>
                    <div class="col-1">
                        Quantity: {{$product["quantity"]}}
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-6">
            <form method="post" action="{{route("order.process")}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" pattern="^[A-Za-z\s]+$" placeholder="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Name</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
                </div>
                <div class="form-group">
                    <label for="first_line_address">First Line Address</label>
                    <input type="text" class="form-control" id="first_line_address" name="first_line_address" pattern="^[A-Za-z0-9\s,]+$" required>
                </div>
                <div class="form-group">
                    <label for="second_line_address">Second Line Address</label>
                    <input type="text" class="form-control" id="second_line_address" name="second_line_address" pattern="^[A-Za-z0-9\s,]+$" required>
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" name="city" pattern="^[A-Za-z0-9\s,]+$" required>
                </div>
                <div class="form-group">
                    <label for="postcode">postcode</label>
                    <input type="text" class="form-control @error('postal_code') is-invalid @enderror" id="postcode" name="postcode" value="{{old('postcode')}}" required>
                    @error('postcode')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>

</div>

<footer>
</footer>
</body>
</html>
