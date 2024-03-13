<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Signup</title>
    @vite(['resources/sass/app.scss'])
</head>

<body style="">
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light" style="background: rgb(34, 34, 34);border-radius: 20;border-top-left-radius: 20;border-top-right-radius: 20;border-bottom-right-radius: 20;border-bottom-left-radius: 20;padding-top: 0;padding-bottom: 10px;">
        <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div><a class="navbar-brand" href="#"><span>PlayPortal</span> </a></div>
            <div class="collapse navbar-collapse" id="navcol-1" style="color: rgb(255,255,255);">
                <ul class="navbar-nav nav-right">
                    <li class="nav-item"><a class="nav-link active" href="index.html" style="color: rgba(224,217,217,0.9);">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html" style="color: rgba(224,217,217,0.9);">Games</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color: rgb(224,217,217,0.9);">Consoles</a></li>
                    <li class="nav-item"><a class="nav-link" href="faq.html" style="color: rgba(224,217,217,0.9);">Accessories</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html" style="color: rgba(224,217,217,0.9);">About us&nbsp;</a></li>
                </ul>
                <p class="ms-auto navbar-text actions" style="text-align: right;"><a class="login" href="login.html" style="color: rgba(224,217,217,0.9);">Log In</a> <a class="btn btn-light action-button" role="button" href="signup.html" style="color: rgba(0,0,0,0.9);background: var(--bs-gray-200);border-radius: 10px;border-style: solid;border-color: rgba(0,0,0,0.9);font-size: 16px;padding: 5px 8px;">Sign Up</a></p>
            </div>
        </div>
    </nav>
    <div style="height: 500px;border-color: var(--bs-body-bg);">
        <div class="container py-4 py-xl-5">
            <div class="row">
                <div class="col-md-6 col-sm-12 offset-md-3">
                    <div class="card bg-white shadow-lg" style="border: none">
                        <div class="card-body">

                                <h5 class="card-title" style="text-align: center;    font-weight: bolder;">Signup</h5>
                                <input type="email" placeholder="E-mail" class="form-control mt-3"/>
                                <input type="password" placeholder="Password" class="form-control mt-3"/>
                                <input type="password" placeholder="Confirm password" class="form-control mt-3"/>
                                <div class="mt-3" style="display: flex;justify-content: space-around;flex-wrap: wrap; ">
                                    {{-- <button class="btn btn-secondary mt-1">I'am not  a robot</button> --}}
                                    <button class="btn btn-dark mt-1">Create Account</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <section>
    </section>
    {{-- <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Navbar---Apple-navbar---apple.js"></script> --}}
</body>

</html>
