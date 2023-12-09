<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/css/style.css'])

</head>
<body style="background: rgb(255, 183, 253)">
<nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light"
     style="background: rgb(34, 34, 34);padding-top: 0;padding-bottom: 10px;height: 89px;">
    <div class="container">
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1"><span
                class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <a class="navbar-brand" href="#" style="color: white;font-size: 24px;font-family: 'Roboto', sans-serif;">PlayPortal</a>
        <div id="navcol-1" class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link active" href="index.html"
                                        style="color: lightgrey;font-size: 18px;">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.html" style="color: lightgrey;font-size: 18px;">Games</a>
                </li>
                <li class="nav-item dropdown"><a id="navbarDropdown" class="nav-link dropdown-toggle"
                                                 data-bs-toggle="dropdown" href="#" role="button"
                                                 style="color: lightgrey;font-size: 18px;"> Consoles </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown"
                        style="background-color: rgb(34, 34, 34);">
                        <li><a class="dropdown-item" href="#" style="color: lightgrey;">PlayStation</a></li>
                        <li><a class="dropdown-item" href="#" style="color: lightgrey;">Nintendo</a></li>
                        <li><a class="dropdown-item" href="#" style="color: lightgrey;">Xbox</a></li>
                        <li><a class="dropdown-item" href="#" style="color: lightgrey;">PC</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="faq.html" style="color: lightgrey;font-size: 18px;">Accessories</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="contact.html" style="color: lightgrey;font-size: 18px;">About
                        us</a></li>
            </ul>
            <form class="d-flex navbar-form">
                <div class="input-group"><input class="form-control form-control" type="search" placeholder="Search"/>
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </div>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="login.html" style="color: lightgrey;font-size: 18px;">Log
                        In</a></li>
                <li class="nav-item"><a class="btn btn-primary action-button" role="button" href="signup.html"
                                        style="color: black;background: white;border-radius: 10px;font-size: 18px;padding: 10px 20px;border: none;transition: background 0.3s;">Sign
                        Up</a></li>
                <li class="nav-item">
                    <button class="btn btn-outline-light ms-2" style="margin-top: 5px;" type="button"><i
                            class="fas fa-shopping-basket" style="color: white;"></i> Basket
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
<h2 style="margin: 10px 650px;">Add Product</h2>
<form method="post" action="{{route("product.create")}}" enctype="multipart/form-data">
    @csrf
    <div class="content">
            <div class="form-group">
                <label for="name" class="label">Products's Name</label><br>
                <br>
                <input id="name" name="name" type="text" size="180" style="padding: 4px;@error('name') is-invalid @enderror" required>
                <br>
                @error('name')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                @enderror
            </div>
            <br>
            <div class="form-group">
                <label for="price" class="label">Products's Price</label><br>
                <br>
                <input type="number" id="price" name="price" size="180" pattern="\d+(\.\d{1,2})?" step=".01" style="padding: 4px;@error('price') is-invalid @enderror" required><br>
                <br>
                @error('price')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description" class="label">Products's Description</label><br>
                <br>
                <input type="text" id="description" name="description" size="180" style="padding: 4px; @error('description') is-invalid @enderror" required><br>
                <br>
                @error('description')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="tags" class="label">Products's Tags</label><br>
                <br>
                @foreach($tags as $tag)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="tags[]" id="{{$tag->id}}" value="{{$tag->id}}">
                        <label class="form-check-label" for="{{$tag->id}}">{{$tag->name}}</label>
                    </div>
                @endforeach
                @error('tags')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                @enderror
                <br>
            </div>
            <br>
            <div class="form-group">
                <label for="category" class="label">Products's Category</label><br>
                <br>
                <select class="form-select" aria-label="Default select" name="category" required>
                    <option selected>Choose Category</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                @error('category')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                @enderror
            </div>
            <br>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image" required>
                @error('image')
                <span class="invalid-feedback mt-2" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                @enderror
            </div>
            <button class="add">Add Product</button>
    </div>
</form>
</body>
</html>
