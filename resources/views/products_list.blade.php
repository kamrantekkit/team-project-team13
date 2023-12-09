<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/css/style.css'])
</head>
<body style="background: rgb(255, 183, 253)">
<nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light"
     style="background: rgb(34, 34, 34);padding-top: 0;padding-bottom: 10px;height: 89px;">
    <div class="container">
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1"><span
                class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <a class="navbar-brand" href="#" style="color: white;font-size: 24px;font-family: 'Roboto', sans-serif;">PlayPortal</a>
        <div id="navcol-1" class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link active" href="index.html"
                                        style="color: lightgrey;font-size: 18px;">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.html" style="color: lightgrey;font-size: 18px;">Games</a>
                </li>
                <li class="nav-item dropdown"><a id="navbarDropdown" class="nav-link dropdown-toggle"
                                                 data-bs-toggle="dropdown" href="#" role="button"
                                                 style="color: lightgrey;font-size: 18px;"> Consoles </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown"
                        style="background-color: rgb(34, 34, 34);">
                        <li><a class="dropdown-item" href="#" style="color: lightgrey;">PlayStation</a></li>
                        <li><a class="dropdown-item" href="#" style="color: lightgrey;">Nintendo</a></li>
                        <li><a class="dropdown-item" href="#" style="color: lightgrey;">Xbox</a></li>
                        <li><a class="dropdown-item" href="#" style="color: lightgrey;">PC</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="faq.html" style="color: lightgrey;font-size: 18px;">Accessories</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="contact.html" style="color: lightgrey;font-size: 18px;">About
                        us</a></li>
            </ul>
            <form class="d-flex navbar-form">
                <div class="input-group"><input class="form-control form-control" type="search" placeholder="Search"/>
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </div>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="login.html" style="color: lightgrey;font-size: 18px;">Log
                        In</a></li>
                <li class="nav-item"><a class="btn btn-primary action-button" role="button" href="signup.html"
                                        style="color: black;background: white;border-radius: 10px;font-size: 18px;padding: 10px 20px;border: none;transition: background 0.3s;">Sign
                        Up</a></li>
                <li class="nav-item">
                    <button class="btn btn-outline-light ms-2" style="margin-top: 5px;" type="button"><i
                            class="fas fa-shopping-basket" style="color: white;"></i> Basket
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
<h1 style="padding: 30px 20px; border-bottom: 2px solid black; margin: 0px 15px;">Latest Products</h1>
<div class="wrapper" style="display: flex; width: 100%;">
    <div class="filter">
        <form method="GET" action="{{route("products", [$Category])}}">
            @csrf
            <label for="tags" class="label" style="margin-left: 10px;">Tags</label>
            @foreach($tags as $tag)
                <div class="form-check" style="margin-left: 10px">
                    <input class="form-check-input" type="checkbox" value="{{$tag['id']}}" name="tags[]" id="{{$tag['id']}}" @if($tag['selected']) checked @endif>
                    <label class="form-check-label" for="{{$tag['id']}}" >
                        {{$tag['name']}}
                    </label>
                </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Create</button>
        </form>


    </div>
    <div class="container" style="margin-top: 15px;">
        <div class="container">
            <div class="row">
                @foreach($productPages as $product)
                    <div class="col-md-2" style="margin: 20px;">
                        <div class="card" style="width: 200.0px;height: 280px;padding: 20px;">
                            <img src="{{asset($product->image_path)}}" class="card-img-top" alt="Product Image"
                                 width="250" height="250">
                            <div class="card-body">
                                <h5 class="card-title">{{$product->name}}</h5>
                                <p class="card-text">£{{$product->price}}</p>
                                <a href="{{route("product",[$product->id])}}" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                {{ $productPages->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>

</body>
</html>
