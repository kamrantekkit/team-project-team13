<header>
    <style>
        .custom-search-width {
            width: 54%; /* sets width of searchbar to custom width */
            margin-right: 17px;
        }

        .navbar-brand {
            margin-left: -50px; /* moves playportal logo left */
        }

        .custom-margin-right {
            margin-right: -60px; /* used to move sign in and basket right */
        }

        .form-control:focus { /* removes blue outline when searchbar is clicked*/
            outline: none;
            box-shadow: none;
        }

    </style>
    <nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light"
         style="background: rgb(23, 30, 49);padding-top: 0;padding-bottom: 10px;height: 89px;">
        <!-- Navbar section -->
        <div class="container align-items-center">
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{route('home')}}" style="margin-right: 10px;">
                <img src="{{asset('assets/img/logo.png')}}" alt="PlayPortal Logo" style="height: 100px;">
            </a>
            <div id="navcol-1" class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('home')}}" style="color: lightgrey;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('products')}}" style="color: lightgrey;">Games</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                           role="button" style="color: lightgrey;">Consoles</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown"
                            style="background-color: rgb(23, 30, 49);">
                            <li><a class="dropdown-item" href="{{route('products.category',['Playstation'])}}"
                                   style="color: lightgrey;">PlayStation</a></li>
                            <li><a class="dropdown-item" href="{{route('products.category',['Nintendo'])}}"
                                   style="color: lightgrey;">Nintendo</a></li>
                            <li><a class="dropdown-item" href="{{route('products.category',['Xbox'])}}"
                                   style="color: lightgrey;">Xbox</a></li>
                            <li><a class="dropdown-item" href="{{route('products.category',['PC'])}}"
                                   style="color: lightgrey;">PC</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('products.category',['Accessories'])}}" style="color: lightgrey;">Accessories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about-us')}}" style="color: lightgrey;">About Us</a>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}" style="color: lightgrey;">Contact Us</a>
                    </li>
                    </li>
                </ul>
                <div class="d-flex custom-search-width"> <!-- custom searchbar width -->

                    <form class="input-group" method="GET" action="{{ route('products.search') }}">

                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">
                            <i class="fas fa-search" style="color: lightgrey;"></i> <!-- Search image -->
                        </button>
                        <ul class="navbar-nav custom-margin-right">
                            @if(auth()->guest())
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('login')}}"
                                       style="color: lightgrey;background: rgb(23, 30, 49);border-radius: 10px;">Sign
                                        In</a>
                                </li>
                            @elseif(auth()->check())
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('dashboard')}}"
                                       style="color: lightgrey;background: rgb(23, 30, 49);border-radius: 10px;">Dashboard</a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <button href="{{route('basket')}}" class="btn btn-outline-light ms-2" type="button">
                                    <i class="fas fa-shopping-basket" style="color: lightgrey;"></i>
                                    <span style="color: lightgrey;">Basket</span>
                                </button>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>
