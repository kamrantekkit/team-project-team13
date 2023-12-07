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
<nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light" style="background: rgb(34, 34, 34);padding-top: 0;padding-bottom: 10px;height: 89px;">
    <div class="container"><button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><a class="navbar-brand" href="#" style="color: white;font-size: 24px;font-family: 'Roboto', sans-serif;">PlayPortal</a>
        <div id="navcol-1" class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link active" href="index.html" style="color: lightgrey;font-size: 18px;">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.html" style="color: lightgrey;font-size: 18px;">Games</a></li>
                <li class="nav-item dropdown"><a id="navbarDropdown" class="nav-link dropdown-toggle"  data-bs-toggle="dropdown" href="#" role="button" style="color: lightgrey;font-size: 18px;"> Consoles </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(34, 34, 34);">
                        <li><a class="dropdown-item" href="#" style="color: lightgrey;">PlayStation</a></li>
                        <li><a class="dropdown-item" href="#" style="color: lightgrey;">Nintendo</a></li>
                        <li><a class="dropdown-item" href="#" style="color: lightgrey;">Xbox</a></li>
                        <li><a class="dropdown-item" href="#" style="color: lightgrey;">PC</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="faq.html" style="color: lightgrey;font-size: 18px;">Accessories</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.html" style="color: lightgrey;font-size: 18px;">About us</a></li>
            </ul>
            <form class="d-flex navbar-form">
                <div class="input-group"><input class="form-control form-control" type="search" placeholder="Search" /><button class="btn btn-outline-light" type="submit">Search</button></div>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="login.html" style="color: lightgrey;font-size: 18px;">Log In</a></li>
                <li class="nav-item"><a class="btn btn-primary action-button" role="button" href="signup.html" style="color: black;background: white;border-radius: 10px;font-size: 18px;padding: 10px 20px;border: none;transition: background 0.3s;">Sign Up</a></li>
                <li class="nav-item"><button class="btn btn-outline-light ms-2" style="margin-top: 5px;" type="button"><i class="fas fa-shopping-basket"  style="color: white;"></i> Basket </button></li>
            </ul>
        </div>
    </div>
</nav>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <div class="container">

        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12 ">
                <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                    <div class="card" style="background-color: #f6eaf8;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <img src="https://crepsuk.com/cdn/shop/products/image_480fa0dd-e0cf-49cf-9f7b-adf3e0343c49.jpg?v=1617042748&width=990" class="img-thumbnail" alt="Item Image">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <p>order name </p>
                                    <p>order price : £00 </p>
                                </div>
                            </div>
                            <div class="row mt-3" >
                                <div style="display: flex;
                                justify-content: space-between;
                                flex-wrap: wrap;">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Qty</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control">
                                        </div>
                                      </div>
                                    <div>
                                        <a href="#">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                    <div class="card" style="background-color: #f6eaf8;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <img src="https://crepsuk.com/cdn/shop/products/image_480fa0dd-e0cf-49cf-9f7b-adf3e0343c49.jpg?v=1617042748&width=990" class="img-thumbnail" alt="Item Image">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <p>order name </p>
                                    <p>order price : £00 </p>
                                </div>
                            </div>
                            <div class="row mt-3" >
                                <div style="display: flex;
                                justify-content: space-between;
                                flex-wrap: wrap;">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Qty</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control">
                                        </div>
                                      </div>
                                    <div>
                                        <a href="#">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>

            </div>
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
