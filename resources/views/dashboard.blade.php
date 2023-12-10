<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>view-previous-orders</title>
    @vite(['resources/js/app.js','resources/sass/app.scss'])
</head>

<body style="height: 1200px;background: rgb(255,183,253);">

<!-- navbar -->
<div class="container-fluid" style="background: rgb(34,34,34);">
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
                    <li class="nav-item"><a class="nav-link" href="about.html"
                                            style="color: lightgrey;font-size: 18px;">Games</a></li>
                    <li class="nav-item dropdown"><a id="navbarDropdown" class="nav-link dropdown-toggle"
                                                     data-bs-toggle="dropdown" href="#" role="button"
                                                     style="color: lightgrey;font-size: 18px;"> Consoles </a>
                        <ul class="dropdown-menu" style="background-color: rgb(34, 34, 34);">
                            <li><a class="dropdown-item" href="#" style="color: lightgrey;">PlayStation</a></li>
                            <li><a class="dropdown-item" href="#" style="color: lightgrey;">Nintendo</a></li>
                            <li><a class="dropdown-item" href="#" style="color: lightgrey;">Xbox</a></li>
                            <li><a class="dropdown-item" href="#" style="color: lightgrey;">PC</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="faq.html" style="color: lightgrey;font-size: 18px;">Accessories</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.html"
                                            style="color: lightgrey;font-size: 18px;">About us</a></li>
                </ul>
                <form class="d-flex navbar-form">
                    <div class="input-group"><input class="form-control form-control" type="search"
                                                    placeholder="Search"/>
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </div>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="login.html"
                                            style="color: lightgrey;font-size: 18px;">Log In</a></li>
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
</div>

<!-- Left container that showcases customer dashboard -->
<div class="container-fluid" style="height:480px;background:rgb(255,183,253);">
    <div class="row h-100">
        <div class="container-fluid" style="background:rgb(255,183,253);height:480px; margin-top: 40px;">
            <div class="row h-100">

                <div class="col-md-6 d-flex justify-content-start align-items-center">

                    <div class="card rounded"
                         style="width:18rem;min-height:450px;background-color:white;color:black;border-radius:15px;">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title mb-3" style="color:black;">Hi, Rayyan</h5>
                            <p class="card-text" style="color:black;">Account Number: 076DFH6SE12</p>

                            <a class="btn btn-dark my-2" role="button" href="{{route('dashboard')}}" style="height:38px;">Your Orders</a>
                            <a class="btn btn-dark my-2" role="button" href="#" style="height:38px;">Favorites</a>
                            <a class="btn btn-dark my-2" role="button" href="{{route('dashboard.settings')}}" style="height:38px;">My Profile</a>
                            <a class="btn btn-dark my-2" role="button" href="#" style="height:38px;">Payment Details</a>
                            <a class="btn btn-dark my-2" role="button" href="#" style="height:38px;">Alerts</a>
                            <a class="btn btn-dark my-2" role="button" style="height:38px;" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sign Out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Right side column for recent orders  -->
                <div class="col-md-6 col-sm-12" style="margin-top: -458px; margin-left: 460px; margin-bottom: 100px;">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center border-bottom pb-2">
                                <h6 class="mb-0">Previous Orders</h6>
                                <span class="fw-bold fs-6">Order #1C2A3R45</span>
                            </div>

                            <!-- Details of order 1-->
                            <div class="row align-items-center my-3">
                                <div class="col-3">
                                    <img src="https://m.media-amazon.com/images/I/81qBiCSoegL._AC_UF894,1000_QL80_.jpg"
                                         class="img-fluid" alt="item image">
                                </div>
                                <div class="col-9">
                                    <div class="d-flex justify-content-between align-items-center border-bottom pb-1">
                                        <h6 class="mb-0 fw-bold">Spider-Man</h6>
                                        <span class="fs-6 fw-bold">£54</span>
                                    </div>
                                    <p class="mb-1">Item description </p>
                                    <small class="text-muted">QTY: 1</small>
                                </div>
                            </div>


                            <!-- Order placement date -->
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="fw-normal">Order Placed:</span>
                                <span class="fw-bold">2023-01-01</span>
                            </div>
                        </div>
                    </div>

                    <!-- Details of order 2-->
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center border-bottom pb-2">
                                <h6 class="mb-0"></h6>
                                <span class="fw-bold fs-6">Order #2C3A4R56</span>
                            </div>

                            <!-- Order description-->
                            <div class="row align-items-center my-3">
                                <div class="col-3">
                                    <img
                                        src="https://m.media-amazon.com/images/W/MEDIAX_792452-T2/images/I/51l2sun2aOL._AC_UY327_FMwebp_QL65_.jpg"
                                        class="img-fluid" alt="item image">
                                </div>
                                <div class="col-9">
                                    <div class="d-flex justify-content-between align-items-center border-bottom pb-1">
                                        <h6 class="mb-0 fw-bold">Nintendo Switch</h6>
                                        <span class="fs-6 fw-bold">£299</span>
                                    </div>
                                    <p class="mb-1">Item description</p>
                                    <small class="text-muted">QTY: 1</small>
                                </div>
                            </div>
                            <!-- Order placement date -->
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="fw-normal">Order Placed:</span>
                                <span class="fw-bold">2023-02-15</span>
                            </div>
                        </div>
                    </div>

                    <!-- Details of order 3 -->
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center border-bottom pb-2">
                                <h6 class="mb-0"></h6>
                                <span class="fw-bold fs-6">Order #3C4A5R67</span>
                            </div>

                            <!-- Order description -->
                            <div class="row align-items-center my-3">
                                <div class="col-3">
                                    <img
                                        src="https://m.media-amazon.com/images/W/MEDIAX_792452-T2/images/I/61P9Y9Oo+lL._AC_UY327_FMwebp_QL65_.jpg"
                                        class="img-fluid" alt="item image">
                                </div>
                                <div class="col-9">
                                    <div class="d-flex justify-content-between align-items-center border-bottom pb-1">
                                        <h6 class="mb-0 fw-bold">Xbox Controller</h6>
                                        <span class="fs-6 fw-bold">£40</span>
                                    </div>
                                    <p class="mb-1">Item description</p>
                                    <small class="text-muted">QTY: 1</small>
                                </div>
                            </div>
                            <!-- Order placement date -->
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="fw-normal">Order Placed:</span>
                                <span class="fw-bold">2023-03-20</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid"
     style="margin-bottom: 0px; margin-top: 542px; background: var(--bs-body-color); color: var(--bs-body-color); padding: 0; margin-left: 0; margin-right: 0; position: absolute; left: 0; right: 0;">
    <div style="background: var(--bs-body-color); color: var(--bs-body-color); height: 89px;"></div>
</div>

</body>

</html>
