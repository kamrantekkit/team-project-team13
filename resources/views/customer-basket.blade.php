<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss'])
</head>
<body>
    <nav class="navbar navbar-expand-md bg-body">
        <div class="container-fluid"><a class="navbar-brand" href="#">Brand</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="#">First Item</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Second Item</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Third Item</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @foreach($products as $product)
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12 ">
                <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                    <div class="card" style="background-color: #f6eaf8;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <img src="{{asset($product['image_path'])}}" class="img-thumbnail" alt="Item Image">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <p>{{$product['name']}}</p>
                                    <p>Price: {{$product['price']}} </p>
                                    <p>Quantity: {{$product['quantity']}} </p>
                                </div>
                            </div>
                            <div class="row mt-3" >
                                <div style="display: flex;
                                justify-content: space-between;
                                flex-wrap: wrap;">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Qty</label>
                                        <div class="col-sm-9">
                                          <input type="number" class="form-control">
                                        </div>
                                      </div>
                                    <div>
                                        <a href="#">Update</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
            @endforeach
            <div class="col-lg-4 col-md-4 col-sm-12 ml-2 mt-3">
                <div class="card" style="background-color: #f6eaf8;">
                    <div class="card-body">
                        <div class="row">
                            <p>Your order : 1 item </p>
                            <p>order total : £00</p>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row mt-3 mb-4">
            <div class="col-md-11 col-sm-11">
                <div class="card" style="background-color: #f6eaf8;">
                    <div class="card-body">
                        <p>Order Total ( 1 item): £00</p>
                        <div style="display: flex;
                        justify-content: center;">
                            <button class="btn btn-primary">SECURE CHECKOUT</button>
                        </div>
                    </div>
                  </div>
            </div>
        </div>




        {{-- <div class="card text-center">
            <div class="card-header">
                Cart
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                        <input type="button" value="Update" class="btn btn-primary"/>
                    </div>
                </div>
            </div>
          </div> --}}

    </div>
</body>

</html>
