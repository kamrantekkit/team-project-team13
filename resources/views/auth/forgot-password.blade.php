<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Forget Password</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss',"resources/js/app.js",'resources/css/forget_password_page.css'])
</head>
<body class="d-flex flex-column  min-vh-100"  >
@include("layout.header")

<section class="h-100 gradient-custom flex-grow-1">
    <div class="container py-5">
        <div class="row mt-3">
            <div class="offset-3 col-md-6">
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h5 class="mb-0" style="text-align: center">Forgot Password</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('password.email')}}">
                            <div class="d-flex flex-column align-items-center">
                                {{ csrf_field()}}
                                <div class="form-group mt-3 w-75">
                                    <label>Enter your email address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                           placeholder="Enter email address"/>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <input type="submit" class="btn btn-dark mt-3 w-75" value="Continue"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layout.footer')
</body>
</html>
