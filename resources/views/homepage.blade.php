<!DOCTYPE html>
<html data-bs-theme="dark" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>TP version 1</title>
    <!-- Bootstrap css link -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">

</head>
<body style="background: rgb(255,183,253);">
<nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light" style="background: rgb(34, 34, 34); padding-top: 0; padding-bottom: 10px;">
    <div class="container">
        <!-- Navbar toggler button for screen size -->
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1">
            <span class="visually-hidden">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div>
            <!-- Playportal navbar logo -->
            <a class="navbar-brand" href="" style="color: white; font-size: 24px; font-family:  sans-serif;"><span>PlayPortal</span></a>
        </div>
        <div id="navcol-1" class="collapse navbar-collapse" style="color: rgb(255, 255, 255);">
            <!-- Navbar links -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="home.html" style="color: lightgrey; font-size: 18px;">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="games.html" style="color: lightgrey; font-size: 18px;">Games</a></li>
                <li class="nav-item"><a class="nav-link" href="consoles.html" style="color: lightgrey; font-size: 18px;">Consoles</a></li>
                <li class="nav-item"><a class="nav-link" href="accessories.html" style="color: lightgrey; font-size: 18px;">Accessories</a></li>
                <li class="nav-item"><a class="nav-link" href="about.html" style="color: lightgrey; font-size: 18px;">About us</a></li>
            </ul>
            <p class="ms-auto navbar-text actions" style="text-align: right;">
                <!-- Log in link -->
                <a class="login" href="login.html" style="color: lightgrey; font-size: 18px; margin-right: 15px; text-decoration: none;">Log In</a>
                <!-- Sign up link and sign up button -->
                <a class="btn btn-primary action-button" role="button" href="signup.html" style="color: black; background: white; border-radius: 10px; font-size: 18px; padding: 10px 20px; border: none;">Sign Up</a>
            </p>
        </div>
    </div>
</nav>
<div style="height: 500px;background: rgb(34,34,34);">
    <div style="background: #ffffff;height: 411.6667px;margin-bottom: 100px;margin-top: 400px;"></div>
</div>
<section></section>
<!-- Links the bootstrap JS -->
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>

