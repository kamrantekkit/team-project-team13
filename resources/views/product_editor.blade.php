<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Product</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss','resources/css/style2.css'])

</head>


<!--  page background -->
<body style="background: rgb(250,250,245);">
@include('layout.header')
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
