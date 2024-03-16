<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/css/product-styles.css','resources/sass/app.scss'])
</head>
<style>
    .custom-search-width {
        width: 54%; /* sets width of searchbar to custom width */
        margin-right: 17px;
    }

    .navbar-brand {
        margin-left: -50px; /* moves playportal logo left */
    }

    .custom-margin-right {
        margin-right: -60px; /* used to move sign in and basket right */
    }

    .form-control:focus { /* removes blue outline when searchbar is clicked*/
        outline: none;
        box-shadow: none;
    }
</style>


<!--  page background -->
<body style="background: rgb(250,250,245);height: 1500px;">
<nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light"
     style="background: rgb(23, 30, 49);padding-top: 0;padding-bottom: 10px;height: 89px;">
    <!-- Navbar section -->
    <div class="container align-items-center">
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1">
            <span class="visually-hidden">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#" style="margin-right: 10px;">
            <img src="assets/css/playportal.png" alt="PlayPortal Logo" style="height: 100px;">
        </a>
        <div id="navcol-1" class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.html" style="color: lightgrey;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html" style="color: lightgrey;">Games</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                       role="button" style="color: lightgrey;">Consoles</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown"
                        style="background-color: rgb(23, 30, 49);">
                        <li><a class="dropdown-item" href="#" style="color: lightgrey;">PlayStation</a></li>
                        <li><a class="dropdown-item" href="#" style="color: lightgrey;">Nintendo</a></li>
                        <li><a class="dropdown-item" href="#" style="color: lightgrey;">Xbox</a></li>
                        <li><a class="dropdown-item" href="#" style="color: lightgrey;">PC</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faq.html" style="color: lightgrey;">Accessories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html" style="color: lightgrey;">About Us</a>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html" style="color: lightgrey;">Contact Us</a>
                </li>
                </li>
            </ul>
            <div class="d-flex custom-search-width"> <!-- custom searchbar width -->
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">
                        <i class="fas fa-search" style="color: lightgrey;"></i> <!-- Search image -->
                    </button>
                    <ul class="navbar-nav custom-margin-right">
                        <li class="nav-item">
                            <a class="nav-link" href="signin.html"
                               style="color: lightgrey;background: rgb(23, 30, 49);border-radius: 10px;">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-outline-light ms-2" type="button">
                                <i class="fas fa-shopping-basket" style="color: lightgrey;"></i>
                                <span style="color: lightgrey;">Basket</span>
                            </button>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- Breadcrumb -->
<div class="breadcrumb-area" style="background-image:url({{asset('assets/img/product-list-background.png')}});">
    <div class="container">
        <div class="in-breadcrumb">
            <div class="row">
                <div class="col">
                    <h3>Product Details</h3>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Page Conttent -->
<main class="page-content">

    <!-- Product Details Area -->
    <div class="product-details-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-details">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="single-product-details-image">
                                    <img src="{{asset($product['image_path'])}}" alt="">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="product-details-info">
                                    <h4>SPIDER MAN - 2</h4>
                                    <div class="product-price-rating">
                                        <div class="price-box">
                                            <span class="new-price">£ {{$product['price']}}</span>
                                        </div>
                                        <div class="product-rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>{{$product['description']}}</p>

                                    <p><strong>Tags: </strong>
                                        @foreach($tags as $tag)
                                            {{$tag['name']}}&nbsp;
                                        @endforeach
                                    </p>


                                    <form method="post" action="{{route("basket.add")}}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$product->id}}">
                                        <div class="product-quantity">
                                            <label>Quantity : </label>
                                            <input id="quanity" min="1" max="100" value="1" type="number">
                                        </div>
                                        @if($status = session()->pull("addItem"))
                                            <div class="text-success">
                                                {{$status}}
                                            </div>
                                        @endif

                                        <div class="add-to-cart-btn">
                                            <button type="submit" class="btn btn-primary">ADD TO CART</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="product-description-area section-pt">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="nav description-list" role="tablist">
                                    <li class="active h2">Reviews
                                    </li>

                                </ul>


                                <div class="blog-wrapper">
                                    <div class="tab-content">

                                        <div id="description" class="tab-pane active">

                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec
                                                gravida nisl. Proin ornare augue laoreet, porta ligula eget, rhoncus
                                                erat. In at arcu suscipit, auctor mauris sed, dapibus metus. Curabitur a
                                                arcu porta, laoreet arcu et, elementum justo. Class aptent taciti
                                                sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                                Sed vel ex et dolor congue commodo. Vestibulum id sapien ornare,
                                                ullamcorper velit vel, pretium nisi. Suspendisse nec feugiat justo.
                                                Nullam rutrum augue ac mi accumsan, rutrum eleifend augue tincidunt.
                                                Maecenas sed est vel ligula cursus tincidunt eu at ipsum. </p>

                                            <div class="details-list">
                                                <h5>Features :</h5>
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-arrow-right"></i>Lorem ipsum
                                                            dolor sit amet, consectetur adipiscing elit.</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-arrow-right"></i>Proin ornare
                                                            augue laoreet, porta ligula eget, rhoncus erat </a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-arrow-right"></i>In at arcu
                                                            suscipit, auctor mauris sed, dapibus metus. Curabitur a arcu
                                                            porta, laoreet arcu et, elementum justo</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</div>
</body>
</html>
