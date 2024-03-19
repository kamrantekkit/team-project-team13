<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/css/admin_dashboard.css'])
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
    .nav-icon {
        margin-right: 5px; /* creates space between the icons and the text */
        margin-top: 7px; /* move icon lower to be inline with text  */
    }

    .nav-link-text {
        display: inline-block;
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


<div id="playportal-sidepanel" class="playportal-sidepanel">
    <div class="sidepanel-inner d-flex flex-column">
        <nav id="playportal-nav-main" class="playportal-nav playportal-nav-main flex-grow-1">
            <ul class="playportal-menu list-unstyled">
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <i class="fas fa-user-circle nav-icon"></i>
                        <span class="nav-link-text">Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-shopping-bag nav-icon"></i>
                        <span class="nav-link-text">My Orders</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-heart nav-icon"></i>
                        <span class="nav-link-text">Favourites</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-sign-out-alt nav-icon"></i>
                        <span class="nav-link-text">Sign Out</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<div class="container mt-4">
    <!-- Order Summary Card -->
    <div class="card mb-3">
        <div class="card-header">
            Order #1C2A3R45
        </div>
        <div class="card-body">
            <!-- Item -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <img src="https://m.media-amazon.com/images/I/81qBiCSoegL._AC_UF894,1000_QL80_.jpg" class="img-thumbnail me-2" style="width: 100px;" alt="Spider-Man">
                    <div>
                        <h5 class="mb-0">Spider-Man</h5>
                        <p class="mb-0">Item description</p>
                    </div>
                </div>
                <div>
                    <span>£54</span>
                </div>
            </div>
            <div class="text-end">
                <span class="text-muted">Order Placed: 2023-01-01</span>
            </div>
        </div>
        <div class="card-footer text-muted">
            Dispatched to: Rayyan Ali - Total Amount: £54
            <a href="#" class="btn btn-primary float-end">View Your Item</a>
        </div>
    </div>

</div>



</body>
</html>
