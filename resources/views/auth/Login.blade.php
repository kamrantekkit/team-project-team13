<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login Page</title>
    @vite(['resources/js/app.js','resources/sass/app.scss'])
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body style="background: #FAFAF5;">
@include("layout.navbar")
    <section class="position-relative py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h1 style="font-family: 'Inter', sans-serif; font-size: 80px; font-weight: bold;">Login</h1>
                    <p style="font-family: 'Inter', sans-serif; font-size: 28px;">Sign in to your account</p>
                    <form id="loginForm" method="POST" action="{{ route('login') }}" >
                        {{ csrf_field()}}
                        <div class="mb-3">
                            <!-- Username Field -->
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail" placeholder="👤 Username" name="email" value="{{ old('email') }}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <!-- Password Field -->
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword" placeholder="🔑 Password"  name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="d-grid gap-2">

                            <button type="submit" class="btn btn-primary" style="font-size: 28px; font-weight: bold; background-color: black;">Login</button>
                            <!-- Forgot Password Button -->
                            <a href="forgotpassword.html" class="btn btn-link" style="font-size: 28px;">Forgot your password?</a>
                        </div>
                    </form>
                    <!-- Sign Up Button -->
                    <p style="font-family: 'Inter', sans-serif; font-size: 28px;">Don't have an account? <a href="signup.html" style="color: blue;">Click here to create one</a></p>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Navbar---Apple-navbar---apple.js"></script>
</body>

</html>
