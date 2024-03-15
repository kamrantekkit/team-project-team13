<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss','resources/css/style2.css'])

</head>
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


<!--  page background -->
<body style="background: rgb(250,250,245);">
<nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light"
     style="background: rgb(23, 30, 49);padding-top: 0;padding-bottom: 10px;height: 89px;">
    <!-- Navbar section -->
    <div class="container align-items-center">
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1">
            <span class="visually-hidden">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#" style="margin-right: 10px;">
            <img src="assets/img/Untitled.png" alt="PlayPortal Logo" style="height: 100px;">
        </a>
        <div id="navcol-1" class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.html" style="color: lightgrey;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html" style="color: lightgrey;">Games</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                       role="button" style="color: lightgrey;">Consoles</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown"
                        style="background-color: rgb(23, 30, 49);">
                        <li><a class="dropdown-item" href="#" style="color: lightgrey;">PlayStation</a></li>
                        <li><a class="dropdown-item" href="#" style="color: lightgrey;">Nintendo</a></li>
                        <li><a class="dropdown-item" href="#" style="color: lightgrey;">Xbox</a></li>
                        <li><a class="dropdown-item" href="#" style="color: lightgrey;">PC</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faq.html" style="color: lightgrey;">Accessories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html" style="color: lightgrey;">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html" style="color: lightgrey;">Contact Us</a>
                </li>
            </ul>
            <div class="d-flex custom-search-width"> <!-- custom searchbar width -->
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">
                        <i class="fas fa-search" style="color: lightgrey;"></i> <!-- Search image -->
                    </button>
                    <ul class="navbar-nav custom-margin-right">
                        <li class="nav-item">
                            <a class="nav-link" href="signin.html"
                               style="color: lightgrey;background: rgb(23, 30, 49);border-radius: 10px;">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-outline-light ms-2" type="button">
                                <i class="fas fa-shopping-basket" style="color: lightgrey;"></i>
                                <span style="color: lightgrey;">Basket</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<h2 style="margin: 10px 650px;">Add Product</h2>
<form method="post" action="{{route("product.create")}}" enctype="multipart/form-data" class="product_form">
    @csrf
    <div class="content">
        <div class="form-group">
            <label for="name" class="label">Products's Name</label><br>
            <input id="name" name="name" type="text" size="180" style="padding: 4px;">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="price" class="label">Products's Price</label><br>
            <input type="number" id="price" pattern="\d+(\.\d{1,2})?" step=".01" name="price" size="180" style="padding: 4px;" >
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description" class="label">Products's Description</label><br>
            <input id="description" name="description" type="text" size="180" style="padding: 4px;" >
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="tags" class="label">Products's Tags</label><br>
            <input type="hidden" name="tags" value="">
            @foreach($tags as $tag)
                <div class="form-group form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="tags[]" id="{{$tag->id}}" value="{{$tag->id}}">
                    <label class="form-check-label" for="{{$tag->id}}">{{$tag->name}}</label>
                </div>
            @endforeach
            @error('tags')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
        <label for="category" class="label">Products's Category</label><br>
        <select class="form-select" name="category" aria-label="Default select" >
            <option value="">Choose Category</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        @error('category')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>

        <label for="image" class="label">Product's Image</label><br>
        <input type="file" class="image_button" id="image" name="image">
        @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button class="add">Add Product</button>
    </div>
</form>
</body>
</html>
