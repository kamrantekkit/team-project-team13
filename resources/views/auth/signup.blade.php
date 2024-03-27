<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Signup</title>
    @vite(['resources/sass/app.scss'])
</head>

<body class="d-flex flex-column  min-vh-100" style="">
@include("layout.header")
<div class="flex-grow-1" style="border-color: var(--bs-body-bg);">
    <div class="container py-4 py-xl-5">
        <div class="row">
            <div class="col-md-6 col-sm-12 offset-md-3">
                <div class="card bg-white shadow-lg" style="border: none">
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <h5 class="card-title" style="text-align: center;    font-weight: bolder;">Signup</h5>

                            <input type="text" placeholder="Name"
                                   class="form-control mt-3  @error('name') is-invalid @enderror" name="name"
                                   value="{{ old('name') }}" placeholder="Name" required autocomplete="name"
                                   autofocus/>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <input id="phone" type="tel"
                                   class="form-control  mt-3 @error('phone') is-invalid @enderror" name="phone"
                                   value="{{ old('phone') }}" placeholder="Phone" required autocomplete="tel"
                                   autofocus/>
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <input type="email" placeholder="E-mail"
                                   class="form-control mt-3 @error('email') is-invalid @enderror"
                                   value="{{ old('email') }}" name="email" required autocomplete="email"/>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                            <input type="password" placeholder="Password"
                                   class="form-control mt-3 @error('password') is-invalid @enderror" id="password"
                                   name="password" required autocomplete="new-password"/>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                            <input type="password" placeholder="Confirm password" class="form-control mt-3"
                                   id="password_confirm" name="password_confirmation" required
                                   autocomplete="new-password"/>

                            <div class="mt-3" style="display: flex;justify-content: space-around;flex-wrap: wrap; ">
                                {{-- <button class="btn btn-secondary mt-1">I'am not  a robot</button> --}}
                                <button type="submit" class="btn btn-dark mt-1">Create Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@include('layout.footer')
</body>

</html>
