<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Signup</title>
    {{-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets/css/Black-Navbar.css">
    <link rel="stylesheet" href="assets/css/Navbar---Apple-navbar---apple.css">
    <link rel="stylesheet" href="assets/css/Navbar---Apple.css">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-Dark-icons.css"> --}}
    @vite(['resources/sass/app.scss'])
</head>

<body style="background: rgb(255,183,253);">
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light"
     style="background: rgb(34, 34, 34);border-radius: 20;border-top-left-radius: 20;border-top-right-radius: 20;border-bottom-right-radius: 20;border-bottom-left-radius: 20;padding-top: 0;padding-bottom: 10px;">
    <div class="container">
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span
                class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div><a class="navbar-brand" href="#"><span>PlayPortal</span> </a></div>
        <div class="collapse navbar-collapse" id="navcol-1" style="color: rgb(255,255,255);">
            <ul class="navbar-nav nav-right">
                <li class="nav-item"><a class="nav-link active" href="index.html" style="color: rgba(224,217,217,0.9);">Home</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="about.html"
                                        style="color: rgba(224,217,217,0.9);">Games</a></li>
                <li class="nav-item"><a class="nav-link" href="#" style="color: rgb(224,217,217,0.9);">Consoles</a></li>
                <li class="nav-item"><a class="nav-link" href="faq.html" style="color: rgba(224,217,217,0.9);">Accessories</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="contact.html" style="color: rgba(224,217,217,0.9);">About
                        us&nbsp;</a></li>
            </ul>
            <p class="ms-auto navbar-text actions" style="text-align: right;"><a class="login" href="login.html"
                                                                                 style="color: rgba(224,217,217,0.9);">Log
                    In</a> <a class="btn btn-light action-button" role="button" href="signup.html"
                              style="color: rgba(0,0,0,0.9);background: var(--bs-gray-200);border-radius: 10px;border-style: solid;border-color: rgba(0,0,0,0.9);font-size: 16px;padding: 5px 8px;">Sign
                    Up</a></p>
        </div>
    </div>
</nav>
<div style="background: rgb(255,183,248);height: 500px;border-color: var(--bs-body-bg);">
    <div class="container py-4 py-xl-5">
        <div class="row">
            <div class="col-md-6 col-sm-12 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <h5 class="card-title" style="text-align: center">Signup</h5>
                            <div class="form-group mt-2">
                                <label for="email">Email</label>
                                <input type="email" id="email" placeholder="E-mail"
                                       class="form-control mt-1 @error('email') is-invalid @enderror"
                                       value="{{ old('email') }}" name="email" required autocomplete="email"/>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <label for="name">Full Name</label>
                                <input id="name" type="text"
                                       class="form-control  mt-1 @error('name') is-invalid @enderror" name="name"
                                       value="{{ old('name') }}" placeholder="Name" required autocomplete="name"
                                       autofocus/>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <label for="password">Password</label>
                                <input type="password" placeholder="Password"
                                       class="form-control mt-1 @error('password') is-invalid @enderror" id="password"
                                       name="password" required autocomplete="new-password"/>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <label for="password_confirm">Confirm Pasword</label>
                                <input type="password" placeholder="Confirm password" class="form-control mt-1"
                                       id="password_confirm" name="password_confirmation" required
                                       autocomplete="new-password"/>
                            </div>
                            <div class="mt-3" style="display: flex;justify-content: space-around;flex-wrap: wrap; ">
{{--                                <button class="btn btn-secondary mt-1">I'am not a robot</button>--}}
                                <button class="btn btn-primary mt-1">Create Account</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div style="height: 500px;background: rgb(34,34,34);">
    <div style="background: #ffffff;height: 411.6667px;margin-bottom: 100px;margin-top: 400px;"></div>
</div>
<section>
</section>
{{-- <script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/Navbar---Apple-navbar---apple.js"></script> --}}
</body>

</html>
