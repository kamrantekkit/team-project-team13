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
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="media d-flex align-items-end">
                <div class="preview"><img class="image active" src="{{asset($product->image_path)}}" data-reflow-preview-type="image" width="500" height="500"/></div>
                    <div class="reflow-add-to-cart" style="margin: 160px">
                        <form method="post" action="{{route("basket.add")}}">
                            @csrf
                        <div class="quantity-widget">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="1"
                                       pattern="/^\d+$/" min="1" value="1" style=" width: 100px" required>
                                <label for="quantity">Quantity</label>
                                <button type="submit" class="btn btn-primary mt-2" style="width:180px; height:40px;">Add to Cart</button>
                            </div>
                        </div>

                        </form>
                    </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="product-data">
                <h2 class="product-name">{{$product->name}}</h2>
                <div class="original-price">£{{$product->price}}</div>
                <div class="description">{{$product->description}}</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
