<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/css/style.css'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/css/multi-select-tag.css">

</head>
<body style="background: rgb(255, 183, 253)">
<nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light" style="background: rgb(34, 34, 34); padding-top: 0; padding-bottom: 10px;">
        <div class="container">
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1">
        <span class="visually-hidden">Toggle navigation</span>
        <span class="navbar-toggler-icon"></span>
        </button>
        <div>
        <a class="navbar-brand" href="#" style="color: white; font-size: 24px; font-family: 'Roboto', sans-serif;"><span>PlayPortal</span></a>
        </div>
        <div id="navcol-1" class="collapse navbar-collapse" style="color: rgb(255, 255, 255);">
        <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="index.html" style="color: lightgrey; font-size: 18px;">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.html" style="color: lightgrey; font-size: 18px;">Games</a></li>
        <li class="nav-item"><a class="nav-link" href="#" style="color: lightgrey; font-size: 18px;">Consoles</a></li>
        <li class="nav-item"><a class="nav-link" href="faq.html" style="color: lightgrey; font-size: 18px;">Accessories</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.html" style="color: lightgrey; font-size: 18px;">About us</a></li>
        </ul>
        <p class="ms-auto navbar-text actions" style="text-align: right;">
        <a class="login" href="login.html" style="color: lightgrey; font-size: 18px; margin-right: 15px; text-decoration: none;">Log In</a>
        <a class="btn btn-primary action-button" role="button" href="signup.html" style="color: black; background: white; border-radius: 10px; font-size: 18px; padding: 10px 20px; border: none; ">Sign Up</a>
        </p>
        </div>
        </div>
        </nav>
    <h2 style="margin: 10px 650px;">Add Product</h2>
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
            <select name="tags" id="tags" multiple>
                <option value="1">Accessories</option>
                <option value="2">Action</option>
                <option value="3">Adventure</option>
                <option value="4">Battle Royale</option>
                <option value="5">Co-op</option>
                <option value="6">Fighting</option>
                <option value="7">First-Person Shooter (FPS)</option>
                <option value="8">Horror</option>
                <option value="9">Massively Multiplayer Online (MMO)</option>
                <option value="10">MOBA</option>
                <option value="11">Music/Rhythm</option>
                <option value="12">Multiplayer</option>
                <option value="13">Open World</option>
                <option value="14">Puzzle</option>
                <option value="15">Racing</option>
                <option value="16">Role-Playing Game(RPG)</option>
                <option value="17">Singleplayer</option>
                <option value="18">Simulation</option>
                <option value="19">Strategy</option>
                <option value="20">Sports</option>
                <option value="21">Survival</option>
            </select>
            <br>
            <label for="category" class="label">Products's Category</label><br>
            <br>
            <select name="category" id="category" multiple>
                <option value="1">Accessories</option>
                <option value="2">Nintendo</option>
                <option value="3">Playstation</option>
                <option value="4">Xbox</option>
                <option value="5">Pc</option>
            </select>
            <br>
            <label for="image" class="label">Product's Image</label><br>
            <button class="image_button">Upload Image</button>
            <br>
            <button class="add">Add Product</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>
    <script>
        new MultiSelectTag('tags') 
        new MultiSelectTag('category')
        </script>
</body>
</html>
