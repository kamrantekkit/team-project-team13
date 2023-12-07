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

    <div class="container mt-3">




        <div class="row">
            <div class="col-md-4">
                <div class="card" style="background-color: #f6eaf8;">
                    <div class="card-body">
                        <h5 class="card-title">Abdulrahman</h5>
                        <h6>Account Number: 43543874</h6>


                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                <a href="#" class="btn btn-dark" style="width: 100%" >Your Purchases</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                <a href="#"  class="btn btn-dark" style="width: 100%">Favorites</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                <a href="#"  class="btn btn-dark" style="width: 100%">My Profile</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                <a href="#"  class="btn btn-dark" style="width: 100%">Payment Details</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                <a href="#"  class="btn btn-dark" style="width: 100%">Alerts</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                <a href="#"  class="btn btn-dark" style="width: 100%">Sign Out</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card text-center" style="background-color: #f6eaf8;">
                <div class="card-body">
                    <h5 class="card-title">Personal Info</h5>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-2" style="display: flex;
                    flex-direction: column;
                    align-items: flex-start">
                            <label>Full Name</label>
                            <input class="form-control" type="text" name="fname" style="width: 100%">
                        </div>


                        <div class="col-lg-12 col-md-12 col-sm-12 mb-2" style="display: flex;
                    flex-direction: column;
                    align-items: flex-start">
                            <label>Birthday</label>
                            <input class="form-control" type="date" name="bdate" style="width: 100%">
                        </div>



                        <div class="col-lg-12 col-md-12 col-sm-12 mb-2" style="display: flex;
                    flex-direction: column;
                    align-items: flex-start">
                            <label>Email</label>
                            <input class="form-control" type="email" name="email" style="width: 100%">
                        </div>



                        <div class="col-lg-12 col-md-12 col-sm-12 mb-2" style="display: flex;
                    flex-direction: column;
                    align-items: flex-start">
                            <label>Password</label>
                            <input class="form-control" type="password" name="password" style="width: 100%">
                        </div>



                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                            <input type="button" value="Update" class="btn btn-dark"/>
                        </div>
                    </div>
                </div>
            </div>
            </div>

        </div>


    </div>
</body>

</html>
