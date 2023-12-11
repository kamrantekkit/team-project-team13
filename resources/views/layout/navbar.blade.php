
<nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light" style="background: rgb(34, 34, 34); padding-top: 0; padding-bottom: 10px; height: 89px;">
    <div class="container">
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1">
            <span class="visually-hidden">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{route('home')}}" style="color: white; font-size: 24px; font-family: 'Roboto', sans-serif;">PlayPortal</a>
        <div id="navcol-1" class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link active" href="{{route('home')}}" style="color: lightgrey; font-size: 18px;">Home</a></li>
{{--                <li class="nav-item"><a class="nav-link" href="about.html" style="color: lightgrey; font-size: 18px;">Games</a></li>--}}
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" style="color: lightgrey; font-size: 18px;">Consoles</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(34, 34, 34);">
                        <li><a class="dropdown-item" href="{{route('products',['Playstation'])}}" style="color: lightgrey;">PlayStation</a></li>
                        <li><a class="dropdown-item" href="{{route('products',['Nintendo'])}}" style="color: lightgrey;">Nintendo</a></li>
                        <li><a class="dropdown-item" href="{{route('products',['Xbox'])}}" style="color: lightgrey;">Xbox</a></li>
                        <li><a class="dropdown-item" href="{{route('products',['PC'])}}" style="color: lightgrey;">PC</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{route('products',['Accessories'])}}" style="color: lightgrey; font-size: 18px;">Accessories</a></li>
                <li class="nav-item"><a class="nav-link" href="#" style="color: lightgrey; font-size: 18px;">About us</a></li>
            </ul>
            <form class="d-flex navbar-form">
                <div class="input-group">
                    <input class="form-control form-control" type="search" placeholder="Search" />
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </div>
            </form>
            <ul class="navbar-nav">
                @if(auth()->guest())
                <li class="nav-item"><a class="nav-link" href="{{route('login')}}" style="color: lightgrey; font-size: 18px;">Log In</a></li>
                <li class="nav-item"><a class="btn btn-primary action-button" role="button" href="{{route('register')}}" style="color: black; background: white; border-radius: 10px; font-size: 18px; padding: 10px 20px; border: none; transition: background 0.3s;">Sign Up</a></li>
                @endif
                @if(auth()->check())
                        <li class="nav-item"><a class="btn btn-primary action-button" role="button" href="{{route('dashboard')}}" style="color: black; background: white; border-radius: 10px; font-size: 18px; padding: 10px 20px; border: none; transition: background 0.3s;">Dashboard</a></li>
                @endif
                <li class="nav-item"><a class="btn btn-outline-light ms-2" href="{{route('basket')}}" style="margin-top: 5px;" type="button"><i class="fas fa-shopping-basket" style="color: white;"></i> Basket</a></li>
            </ul>
        </div>
    </div>
</nav>
