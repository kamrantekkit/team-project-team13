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
<body>
<header>
        <img src="logo.png" alt="Logo" class="logo">
        <div class="search_container">
            <form action="" class="cta">
                <input type="text" placeholder="What are you looking for?" class="textbox" size="100">
                <button type="submit" class="submit">Search</button>
            </form>
        </div>
        
        <button class="profile">Profile</button>
    </header>
    <h2 style="margin: 10px 600px;">Add Product</h2>
    <form action="" class="product_form">
        <div class="content">
            <label for="name" class="label">Products's Name</label><br>
            <br>
            <input type="text" size="180" style="padding: 4px;"><br>
            <br>
            <label for="price" class="label">Products's Price</label><br>
            <br>
            <input type="text" size="180" style="padding: 4px;"><br>
            <br>
            <label for="description" class="label">Products's Description</label><br>
            <br>
            <input type="text" size="180" style="padding: 4px;"><br>
            <br>
            <label for="tags" class="label">Products's Tags</label><br>
            <br>
            <input type="text" size="180" style="padding: 4px;"><br>
            <br>
            <label for="category" class="label">Products's Category</label><br>
            <br>
            <input type="text" size="180" style="padding: 4px;"><br>
            <br>
            <label for="image" class="label">Product's Image</label><br>
            <button class="image_button">Upload Image</button>
            <br>
            <button class="add">Add Product</button>
        </div>
    </form>
</body>
</html>
