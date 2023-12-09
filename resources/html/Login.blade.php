<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>TP_version_1</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets/css/Black-Navbar.css">
    <link rel="stylesheet" href="assets/css/Navbar---Apple-navbar---apple.css">
    <link rel="stylesheet" href="assets/css/Navbar---Apple.css">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-Dark-icons.css">
</head>

<body style="background: rgb(255,183,253);"><nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light" style="background: rgb(34, 34, 34);padding-top: 0;padding-bottom: 10px;height: 89px;">
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
    <section class="position-relative py-4 py-xl-5">
        <div class="container"><div class="container">
    <div class="row mb-5">
        <div class="col-md-8 col-xl-6 text-center mx-auto">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="card-title">Log In</h2>
                    <p class="card-text">Hi there again! Access the platform by logging into your account.</p>
                    <form id="loginForm">
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email here...">
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword" placeholder="Enter your password here...">
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Log In</button>
                            <a href="#" class="btn btn-secondary" id="signUpButton">Sign Up</a>
                        </div>
                    </form>
                    <div class="mt-3">
                        <a href="#" class="btn btn-link" id="forgotPasswordLink">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('loginForm').addEventListener('submit', function (event) {
            event.preventDefault();
            login();
        });

        document.getElementById('signUpButton').addEventListener('click', function () {
            signUp();
        });

        document.getElementById('forgotPasswordLink').addEventListener('click', function () {
            forgotPassword();
        });
    });

    function login() {
        var email = document.getElementById('inputEmail').value;
        var password = document.getElementById('inputPassword').value;
        // Redirect to the homepage
        window.location.href = 'homepage.html';
    }

    function signUp() {
        // Redirect to the sign-up page
        window.location.href = 'signup.html';
    }

    function forgotPassword() {
        // Redirect to the new password page
        window.location.href = 'newpassword.html';
    }
</script>
</div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Navbar---Apple-navbar---apple.js"></script>
</body>

</html>
