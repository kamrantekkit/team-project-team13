<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>order-confirmation-page</title>
    @vite(['resources/js/app.js','resources/sass/app.scss'])
</head>

<body>
    <div class="container-fluid" style="background: rgb(34,34,34);"><nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light" style="background: rgb(34, 34, 34);padding-top: 0;padding-bottom: 10px;height: 89px;">
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
</nav></div>
    <div class="container-fluid" style="height:480px;background:rgb(255,183,253);">
        <div class="row h-100"><div class="container-fluid" style="background:rgb(255,183,253);height:400px; margin-top: 40px;">
    <div class="row h-100">

        <div class="col-md-12 d-flex flex-column justify-content-center align-items-center">
            <!-- Confirmation Message -->
            <div class="card rounded" style="max-width: 36rem; min-height: 200px; background-color: white; color: black; border-radius: 15px;">
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <h3 class="card-title mb-3" style="color:black;">Thank You for Your Order!</h3>
                    <p class="card-text" style="color:black;">Your order has been placed successfully. You will receive a confirmation email with the details shortly.</p>
                    <!-- Return to Shopping Button -->
                    <a class="btn btn-dark mt-4" role="button" href="index.html" style="height: 38px;">Return to Shopping</a>
                </div>
            </div>
        </div>
    </div>
</div></div>
    </div>
    <div class="container-fluid" style="color: rgb(34,34,34);background: rgb(34,34,34);">
        <div style="height:89px;color:var(--bs-body-color);background:var(--bs-body-color);"></div>
    </div>

</body>

</html>
