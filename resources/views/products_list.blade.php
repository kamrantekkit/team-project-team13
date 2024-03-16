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
<nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light" style="background: rgb(23, 30, 49);padding-top: 0;padding-bottom: 10px;height: 89px;">
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
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" style="color: lightgrey;">Consoles</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(23, 30, 49);">
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
                        <i class="fas fa-search"  style="color: lightgrey;" ></i> <!-- Search image -->
                    </button>
                    <ul class="navbar-nav custom-margin-right">
                        <li class="nav-item">
                            <a class="nav-link" href="signin.html" style="color: lightgrey;background: rgb(23, 30, 49);border-radius: 10px;">Sign In</a>
                        </li>
                <li class="nav-item">
                    <button class="btn btn-outline-light ms-2" type="button">
                        <i class="fas fa-shopping-basket" style="color: lightgrey;"></i>
                        <span style="color: lightgrey;">Basket</span>
                    </button>

            </ul>
        </div>
    </div>
</nav>
    <div class="breadcrumb-area" style="background-image:url('resources/img/background.png');">
        <div class="container">
            <div class="in-breadcrumb">
                <div class="row">
                    <div class="col">
                        <h3>Games</h3>
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href='#'>Home</a></li>
                            <li class="breadcrumb-item active">Games</li>
                        </ul>
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
                                        <button type="submit"><i class="bi bi-search"></i></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-widget widget-categories">
                                    <h4 class="widget-title">
                                        <span>Tags</span>
                                    </h4>
                                    <div class="tag">
                                        <a href="#">Accessories</a>
                                        <a href="#">Action</a>
                                        <a href="#">Adventure</a>
                                        <a href="#">Battle Royale</a>
                                        <a href="#">Co-op</a>
                                        <a href="#">Fighting</a>
                                        <a href="#">Horror</a>
                                        <a href="#">First-Person Shooter (FPS)</a>
                                        <a href="#">Massively Multiplayer Online (MMO)</a>
                                        <a href="#">MOBA</a>
                                        <a href="#">Music/Rhythm</a>
                                        <a href="#">Multiplayer</a>
                                        <a href="#">Open World</a>
                                        <a href="#">Puzzle</a>
                                        <a href="#">Racing</a>
                                        <a href="#">Role-Playing Game(RPG)</a>
                                        <a href="#">Singleplayer</a>
                                        <a href="#">Simulation</a>
                                        <a href="#">Strategy</a>
                                        <a href="#">Sports</a>
                                        <a href="#">Survival</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-widget widget-categories">
                                    <h4 class="widget-title">
                                        <span> Price Range</span>
                                    </h4>
                                    <ul>
                                        <li>
                                            <div class="checkout-box-wrap">
                                                <label>
                                                    <input type="checkbox" id="chekout-box"> £0 - £19.99
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkout-box-wrap">
                                                <label>
                                                    <input type="checkbox" id="chekout-box"> £20 - £39.99
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkout-box-wrap">
                                                <label>
                                                    <input type="checkbox" id="chekout-box"> £40 - 59.99£
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkout-box-wrap">
                                                <label>
                                                    <input type="checkbox" id="chekout-box"> £60 - £99.99
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkout-box-wrap">
                                                <label>
                                                    <input type="checkbox" id="chekout-box"> £100 - £149.99
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkout-box-wrap">
                                                <label>
                                                    <input type="checkbox" id="chekout-box"> £150 - £199.99
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkout-box-wrap">
                                                <label>
                                                    <input type="checkbox" id="chekout-box"> £200+
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                        </div>

                    </div>                    <div class="col-lg-9 order-lg-2 order-1">

<div class="row">
    <div class="col-lg-12">
        <div class="shop-top-bar mt--30">
            <div class="shop-bar-inner">
                <div class="product-view-mode">
                    <ul class="nav shop-item-filter-list" role="tablist">
                        <li class="active"><a class="active" data-bs-toggle="tab" href="#grid-view"><i class="zmdi zmdi-apps"></i></a></li>
                        <li><a data-bs-toggle="tab"  href="#list-view"><i class="bi bi-list-check"></i></a></li>
                    </ul>
                </div>
                <div class="toolbar-amount">
                <span>Showing 1 to 9 of 15</span>
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

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-product mt--30">
                            <div class="single-product-image">
                                <a href='#'><img src="resources/img/sp.jpg" alt=""></a>
                                <span class="styker">NEW RELEASE</span>
                                <div class="product-action">
                                    <ul>                                                                	<li>
                                        <a href="#"><i class="bi bi-cart-plus-fill"></i></a>
                                    </li>
                                </ul>
                                </div>
                            </div>

                            <div class="single-product-contnet">
                                <h5><a href='product-page.html'>Game 1</a></h5>
                                <div class="price-box">
                                    <span class="NEW RELEASE-price">£ 25</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-product mt--30">
                            <div class="single-product-image">
                                <a href='#'><img src="resources/img/sp.jpg" alt=""></a>
                                <div class="product-action">
                                    <ul>                                                                	<li>
                                        <a href="#"><i class="bi bi-cart-plus-fill"></i></a>
                                    </li>
                                </ul>
                                </div>
                            </div>

                            <div class="single-product-contnet">
                                <h5><a href='product-page.html'>Game 3</a></h5>
                                <div class="price-box">
                                    <span class="NEW RELEASE-price">£ 25</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-product mt--30">
                            <div class="single-product-image">
                                <a href='#'><img src="resources/img/sp.jpg" alt=""></a>
                                <span class="styker">NEW RELEASE</span>
                                <div class="product-action">
                                    <ul>                                                                	<li>
                                        <a href="#"><i class="bi bi-cart-plus-fill"></i></a>
                                    </li>
                                </ul>
                                </div>
                            </div>

                            <div class="single-product-contnet">
                                <h5><a href='product-page.html'>Game 4</a></h5>
                                <div class="price-box">
                                    <span class="NEW RELEASE-price">£ 25</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-product mt--30">
                            <div class="single-product-image">
                                <a href='#'><img src="resources/img/sp.jpg" alt=""></a>
                                <div class="product-action">
                                    <ul>                                                                	<li>
                                        <a href="#"><i class="bi bi-cart-plus-fill"></i></a>
                                    </li>
                                </ul>
                                </div>
                            </div>

                            <div class="single-product-contnet">
                                <h5><a href='product-page.html'>Game 11</a></h5>
                                <div class="price-box">
                                    <span class="NEW RELEASE-price">£ 25</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-product mt--30">
                            <div class="single-product-image">
                                <a href='#'><img src="resources/img/sp.jpg" alt=""></a>
                                <div class="product-action">
                                    <ul>                                                                	<li>
                                        <a href="#"><i class="bi bi-cart-plus-fill"></i></a>
                                    </li>
                                </ul>
                                </div>
                            </div>

                            <div class="single-product-contnet">
                                <h5><a href='product-page.html'>Game 7</a></h5>
                                <div class="price-box">
                                    <span class="NEW RELEASE-price">£ 25</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-product mt--30">
                            <div class="single-product-image">
                                <a href='#'><img src="resources/img/sp.jpg" alt=""></a>
                                <div class="product-action">
                                    <ul>                                                                	<li>
                                        <a href="#"><i class="bi bi-cart-plus-fill"></i></a>
                                    </li>
                                </ul>
                                </div>
                            </div>

                            <div class="single-product-contnet">
                                <h5><a href='product-page.html'>Game 8</a></h5>
                                <div class="price-box">
                                    <span class="NEW RELEASE-price">£ 25</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-product mt--30">
                            <div class="single-product-image">
                                <a href='#'><img src="resources/img/sp.jpg" alt=""></a>
                                <div class="product-action">
                                    <ul>                                                                	<li>
                                        <a href="#"><i class="bi bi-cart-plus-fill"></i></a>
                                    </li>
                                </ul>
                                </div>
                            </div>

                            <div class="single-product-contnet">
                                <h5><a href='product-page.html'>Game 7</a></h5>
                                <div class="price-box">
                                    <span class="NEW RELEASE-price">£ 25</span>
                                </div>
                            </div>
                        </div>
                    </div>                                            <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-product mt--30">
                            <div class="single-product-image">
                                <a href='#'><img src="resources/img/sp.jpg" alt=""></a>
                                <div class="product-action">
                                    <ul>                                                                	<li>
                                        <a href="#"><i class="bi bi-cart-plus-fill"></i></a>
                                    </li>
                                </ul>
                                </div>
                            </div>

                            <div class="single-product-contnet">
                                <h5><a href='product-page.html'>Game 7</a></h5>
                                <div class="price-box">
                                    <span class="NEW RELEASE-price">£ 25</span>
                                </div>
                            </div>
                        </div>
                    </div>                                            <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-product mt--30">
                            <div class="single-product-image">
                                <a href='#'><img src="resources/img/sp.jpg" alt=""></a>
                                <div class="product-action">
                                    <ul>                                                                	<li>
                                        <a href="#"><i class="bi bi-cart-plus-fill"></i></a>
                                    </li>
                                </ul>
                                </div>
                            </div>

                            <div class="single-product-contnet">
                                <h5><a href='product-page.html'>Game 7</a></h5>
                                <div class="price-box">
                                    <span class="NEW RELEASE-price">£ 25</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-product mt--30">
                            <div class="single-product-image">
                                <a href='#'><img src="resources/img/sp.jpg" alt=""></a>
                                <div class="product-action">
                                    <ul>                                                                	<li>
                                        <a href="#"><i class="bi bi-cart-plus-fill"></i></a>
                                    </li>
                                </ul>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="paginatoin-area ">
    <div class="row">
        <div class="col-lg-12">
            <ul class="pagination-box">
                <li><a class="Previous" href="#"><<i class="zmdi zmdi-chevron-left"></i></a>
                </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li>
                    <a class="Next" href="#">><i class="zmdi zmdi-chevron-right"></i> </a>
                  </li>
            </ul>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
    </main>
</body>
</html>
