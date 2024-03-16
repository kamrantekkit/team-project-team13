<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/css/product-styles.css','resources/sass/app.scss'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
            <img src="assets/img/Untitled.png" alt="PlayPortal Logo" style="height: 100px;">
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
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html" style="color: lightgrey;">Contact Us</a>
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
<div class="breadcrumb-area" style="background-image:url({{asset('assets/img/product-list-background.png')}});">
    <div class="container">
        <div class="in-breadcrumb">
            <div class="row">
                <div class="col">
                    <h3>Games</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<main class="page-content">
    <div class="shop-area section-pb section-pt-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-lg-1 order-2">
                    <div class="row widgets sidebar">
                        <div class="col-lg-12">
                            <div class="single-widget widget-search">
                                <form action="#" class="widget-search-form">
                                    <input type="text" placeholder="Search...">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-widget widget-categories p-2">
                                <h4 class="widget-title">
                                    <span>Tags</span>
                                </h4>
                                <form id="tags" method="GET" action="@if(isset($Category)) {{route('products.category', [$Category])}} @elseif(isset($query)) {{route('products.search')}} @else {{route('products')}} @endif">
                                    @if(isset($query))
                                        <input type="hidden" name="query" value="{{$query}}">
                                    @endif
                                    @foreach($tags as $tag)
                                        <div class="tag m-1">
                                            <input type="checkbox" id="{{$tag['id']}}" name="tags[]" value="{{$tag['id']}}" @if(isset($selectedTags) && in_array($tag['id'], $selectedTags)) checked @endif>
                                            <label for="{{$tag['id']}}" >
                                                {{$tag['name']}}
                                            </label>
                                        </div>
                                    @endforeach

                                </form>
                                <div class="d-flex justify-content-center align-items-center m-2">
                                    <button id="submit-button" type="button" class="btn btn-primary">Filter</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-lg-2 order-1">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="shop-top-bar mt--30">
                                <div class="shop-bar-inner">
                                    <div class="toolbar-amount">
                                        <span>Showing {{ $productPages->firstItem() }} to {{ $productPages->lastItem() }} of {{ $productPages->total() }} results</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-products-wrapper">
                        <div class="tab-content">
                            <div id="grid-view" class="tab-pane active">
                                <div class="shop-product-area">
                                    <div class="row">
                                        @foreach($productPages as $product)
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="single-product mt--30">
                                                <div class="single-product-image">
                                                    <a href='{{route("product",[$product->id])}}'><img src="{{asset($product->image_path)}}" alt=""></a>
                                                    <div class="product-action">
                                                        <ul>
                                                            <li>
                                                                <a href="{{route("product",[$product->id])}}"><i class="bi bi-cart-plus-fill"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product-contnet">
                                                    <h5><a href='product-page.html'>{{$product->name}}</a></h5>
                                                    <div class="price-box">
                                                        <span class="NEW RELEASE-price">£{{$product->price}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div class="paginatoin-area ">
                                <div class="row">
                                    <div class="col-lg-12 mt-2">
                                        {{$productPages->links('pagination::bootstrap-5')}}
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
<script>
    document.getElementById('submit-button').addEventListener('click', function() {
        document.getElementById('tags').submit();
    });
</script>
</body>
</html>
