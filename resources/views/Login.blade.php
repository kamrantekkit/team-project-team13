<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

@include("layout.header")

<body style="background: rgb(255,183,253);">
@include("layout.navbar")
<section class="position-relative py-4 py-xl-5">
    <div class="container">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <div class="card shadow">
                        <div class="card-body">
                            <h2 class="card-title">Log In</h2>
                            <p class="card-text">Hi there again! Access the platform by logging into your account.</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="inputEmail" class="form-label">Email address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail"
                                           placeholder="Enter your email here..." name="email" value="{{ old('email') }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label for="inputPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword"
                                           placeholder="Enter your password here..." name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Log In</button>
                                    <a href="#" class="btn btn-secondary" id="signUpButton" >Sign Up</a>
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
    </div>
</section>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/Navbar---Apple-navbar---apple.js"></script>
</body>

</html>
