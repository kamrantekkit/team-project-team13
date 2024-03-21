<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
@include("layout.head")
<body>
@include("layout.header")
<div class="container mt-3">
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="background-color: #f6eaf8;">
                <div class="card-body">
                    <h5 class="card-title">Welcome Back, {{auth()->user()->name}}</h5>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                            <a href="{{route('dashboard')}}" class="btn btn-dark" style="width: 100%">Your Purchases</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                            <a href="#" class="btn btn-dark" style="width: 100%">Favorites</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                            <a href="{{route('dashboard.settings')}}" class="btn btn-dark" style="width: 100%">My
                                Profile</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                            <a href="#" class="btn btn-dark" style="width: 100%">Payment Details</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                            <a href="#" class="btn btn-dark" style="width: 100%">Alerts</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                            <a href="{{route('logout')}}" class="btn btn-dark" style="width: 100%" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sign Out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card text-center" style="background-color: #f6eaf8;">
                <div class="card-body">
                    <h3 class="card-title border-black border-bottom pb-2">Personal Info</h3>
                    <div class="row">
                        <form method="POST" action="{{ route('user.name.update') }}">
                            @csrf
                            <h6 class="card-subtitle border-black border-bottom mt-2">Update Name</h6>
                            <div class="col-lg-12 col-md-12 col-sm-12 mb-2"
                                 style="display: flex;flex-direction: column;align-items: flex-start">
                                <label for="name">Full Name</label>
                                <input
                                    class="form-control @error("name") is-invalid @enderror @if($nameStatus = session()->pull("nameStatus")) is-valid @endif "
                                    type="text" id="name" name="name" value="{{auth()->user()->name}}"
                                    style="width: 100%">
                                @if($nameStatus)
                                    <div class="valid-feedback">
                                        {{$nameStatus}}
                                    </div>
                                @endif
                                @error("name")
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                                    <input type="submit" value="Update" class="btn btn-dark"/>
                                </div>
                            </div>
                        </form>
                        <form method="POST" action="{{ route('user.email.update') }}">
                            @csrf
                            <h6 class="card-subtitle border-black border-bottom mt-2">Update Email</h6>
                            <div class="col-lg-12 col-md-12 col-sm-12 mb-2"
                                 style="display: flex;flex-direction: column;align-items: flex-start">
                                <label for="email">Email</label>
                                <input
                                    class="form-control @error("email") is-invalid @enderror @if($emailStatus = session()->pull("emailStatus")) is-valid @endif"
                                    type="email" id="email"
                                    name="email" style="width: 100%;" value="{{auth()->user()->email}}">
                                @if($emailStatus)
                                    <div class="valid-feedback">
                                        {{$emailStatus}}
                                    </div>
                                @endif
                                @error("email")
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                                    <input type="submit" value="Update" class="btn btn-dark"/>
                                </div>
                            </div>
                        </form>

                        <form method="POST" action="{{ route('user.password.update') }}">
                            @csrf
                            <h6 class="card-subtitle border-black border-bottom mt-2">Update Password</h6>
                            <div class="col-lg-12 col-md-12 col-sm-12 mb-2"
                                 style="display: flex;flex-direction: column;align-items: flex-start">
                                <label for="old_password">Old Password</label>
                                <input class="form-control @error('old_password') is-invalid @enderror" type="password"
                                       id="old_password" name="old_password" style="width: 100%">
                                @error('old_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 mb-2"
                                 style="display: flex;flex-direction: column;align-items: flex-start">
                                <label for="password">New Password</label>
                                <input class="form-control @error('password') is-invalid @enderror" type="password"
                                       id="password" name="password" style="width: 100%">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 mb-2"
                                 style="display: flex; flex-direction: column;align-items: flex-start">
                                <label for="password_confirmation">New Password Confirm</label>
                                <input
                                    class="form-control @if($passwordStatus = session()->pull("passwordStatus")) is-valid @endif"
                                    type="password" id="password_confirmation" name="password_confirmation"
                                    style="width: 100%">
                                @if($passwordStatus)
                                    <div class="valid-feedback">
                                        {{$passwordStatus}}
                                    </div>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                                    <input type="submit" value="Update" class="btn btn-dark"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>
</body>

</html>
