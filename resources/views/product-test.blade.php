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
<div class="container-fluid">
    <div class="row">
        Name: {{$product->name}}
    </div>
    <div class="row">
        Description: {{$product->description}}
    </div>
    <div class="row">
        Price: {{$product->price}}
    </div>
    <div class="row">
       <img src="{{asset($product->image_path)}}" width="300px" height="150px">
    </div>
    <div class="row">
        <form method="post" action="{{route("basket.add")}}">
            @csrf
            <input type="hidden" name="id" value="{{$product->id}}">
            <div class="form-group">
                <label for="price">Quantity</label>
                <input type="number" class="form-control" id="price" name="quantity" placeholder="1"
                       pattern="/^\d+$/" min="1" value="1" title="Enter a valid number with up to two decimal places"
                       required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
<footer>

</footer>
</body>
</html>
