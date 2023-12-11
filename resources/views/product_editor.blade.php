<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <script src="https://js.stripe.com/v3/"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    @vite(['resources/js/app.js','resources/sass/app.scss', 'resources/css/style.css'])
</head>
<body style="background: rgb(255, 183, 253)">
<!--  Navbar section -->
@include("layout.navbar")
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
