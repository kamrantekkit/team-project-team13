<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

@include("layout.header")

<body style="background: rgb(255,183,253);">

@include("layout.navbar")

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
                                <label for="phone">Phone Number</label>
                                <input id="phone" type="tel"
                                       class="form-control  mt-1 @error('phone') is-invalid @enderror" name="phone"
                                       value="{{ old('phone') }}" placeholder="Phone" required autocomplete="tel"
                                       autofocus/>
                                @error('phone')
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
