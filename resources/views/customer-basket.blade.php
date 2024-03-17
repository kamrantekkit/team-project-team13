<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss',"resources/js/app.js"])
</head>
<body>
<nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light"
     style="background: rgb(34, 34, 34);padding-top: 0;padding-bottom: 10px;height: 89px;">
    <div class="container">
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1"><span
                class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <a class="navbar-brand" href="{{route("home")}}" style="color: white;font-size: 24px;font-family: 'Roboto', sans-serif;">PlayPortal</a>
        <div id="navcol-1" class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link active" href="index.html"
                                        style="color: lightgrey;font-size: 18px;">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route("products")}}" style="color: lightgrey;font-size: 18px;">Games</a>
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
                <li class="nav-item"><a class="btn btn-dark action-button" role="button" href="signup.html"
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
</nav>i
<section class="h-100 gradient-custom">
    <div class="container py-5">
        <div class="row d-flex justify-content-center my-4">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header py-3">
                        @if($basketCount == 0)
                            <h5 class="mb-0">Cart - Empty</h5>
                        @else
                            <h5 class="mb-0">Cart - {{$basketCount}} items</h5>
                        @endif

                    </div>

                    <div class="card-body">
                        @foreach($products as $product)
                        <!-- Single item -->
                        <div class="row">
                            <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                <!-- Image -->
                                <div class="bg-image hover-overlay hover-zoom ripple rounded"
                                     data-mdb-ripple-color="light">
                                    <img
                                        src="{{$product['image_path']}}"
                                        class="w-100" alt="{{$product['name']}}"/>
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                    </a>
                                </div>
                                <!-- Image -->
                            </div>

                            <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                <!-- Data -->
                                <p><strong>{{$product['name']}}</strong></p>
                                <p>{{$product['description']}}</p>
                                <form method="POST" action="{{route('basket.remove')}}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{$product['id']}}"/>
                                    <button type="submit"  class="btn btn-danger btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                                            title="Remove item">
                                        <i class="fas fa-trash link "></i>
                                    </button>
                                </form>
                                <!-- Data -->
                            </div>

                            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                <form method="POST" action="{{route('basket.update')}}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$product['id']}}"/>
                                <!-- Quantity -->
                                <div class="d-flex mb-4" style="max-width: 300px">
                                    <button type="button"  class="btn btn-dark px-3 me-2" style="max-height: 35px;" onclick="decreaseQuantity('item_{{$product['id']}}')">
                                        <i class="fas fa-minus"></i>
                                    </button>

                                    <div class="form-outline">
                                        <input id="item_{{$product['id']}}" min="0" name="quantity" value="{{$product['quantity']}}" type="number"
                                               class="form-control"/>
                                        <label class="form-label" for="item_{{$product['id']}}">Quantity</label>
                                    </div>

                                    <button type="button" class="btn btn-dark px-3 ms-2" style="max-height: 35px;" onclick="increaseQuantity('item_{{$product['id']}}')">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>

                                <!-- Quantity -->

                                <!-- Price -->
                                <p class="text-start text-md-center">
                                    <strong>£{{$product['price']}}</strong>
                                </p>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-primary">Add</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <!-- Single item -->
                        @endforeach
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <p><strong>Expected shipping delivery</strong></p>
                        <p class="mb-0">{{now()->addDays(7)->format('d-m-Y')}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h5 class="mb-0">Summary</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                <div>
                                    <strong>Total Items</strong>
                                </div>
                                <span><strong>{{$basketCount}}</strong></span>
                            </li>
                        </ul>
                        <ul class="list-group list-group-flush">
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                <div>
                                    <strong>Total amount</strong>
                                </div>
                                <span><strong>£{{$basketCost}}</strong></span>
                            </li>
                        </ul>
                        @if($basketCost == 0)
                            <button type="button" class="btn btn-dark btn-lg btn-block">
                                Go to Products
                            </button>
                        @else
                            <button type="button" class="btn btn-dark btn-lg btn-block">
                                Go to checkout
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function increaseQuantity(itemId) {
        var input = document.getElementById(itemId);
        input.value = parseInt(input.value) + 1;
    }

    function decreaseQuantity(itemId) {
        var input = document.getElementById(itemId);
        if (input.value > 0) {
            input.value = parseInt(input.value) - 1;
        }
    }
</script>
</body>
</html>
