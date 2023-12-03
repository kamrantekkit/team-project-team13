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
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">Accessories</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">Action</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                <label class="form-check-label" for="inlineCheckbox3">Adventure</label>
              </div> 
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option4">
                <label class="form-check-label" for="inlineCheckbox3">Battle Royale</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option5">
                <label class="form-check-label" for="inlineCheckbox3">Co-op</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option6">
                <label class="form-check-label" for="inlineCheckbox3">Fighting</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option7">
                <label class="form-check-label" for="inlineCheckbox3">First-Person Shooter (FPS)</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option8">
                <label class="form-check-label" for="inlineCheckbox3">Horror</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option9">
                <label class="form-check-label" for="inlineCheckbox3">Massively Multiplayer Online (MMO)</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option10">
                <label class="form-check-label" for="inlineCheckbox3">MOBA</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option11">
                <label class="form-check-label" for="inlineCheckbox3">Music/Rhythm</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option12">
                <label class="form-check-label" for="inlineCheckbox3">Multiplayer</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option13">
                <label class="form-check-label" for="inlineCheckbox3">Open World</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option14">
                <label class="form-check-label" for="inlineCheckbox3">Puzzle</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option15">
                <label class="form-check-label" for="inlineCheckbox3">Racing</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option16">
                <label class="form-check-label" for="inlineCheckbox3">Role-Playing Game(RPG)</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option17">
                <label class="form-check-label" for="inlineCheckbox3">Singleplayer</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option18">
                <label class="form-check-label" for="inlineCheckbox3">Simulation</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option19">
                <label class="form-check-label" for="inlineCheckbox3">Strategy</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option20">
                <label class="form-check-label" for="inlineCheckbox3">Sports</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option21">
                <label class="form-check-label" for="inlineCheckbox3">Survival</label>
              </div>
            <br>
            <br>
            <label for="category" class="label">Products's Category</label><br>
            <br>
            <select class="form-select" aria-label="Default select">
                <option selected>Choose Category</option>
                <option value="1">Pc</option>
                <option value="2">Playstation</option>
                <option value="3">Xbox</option>
                <option value="3">Nintendo</option>
                <option value="3">Accessories</option>
              </select>
            <br>
            <label for="image" class="label">Product's Image</label><br>
            <button class="image_button">Upload Image</button>
            <br>
            <button class="add">Add Product</button>
        </div>
    </form>
</body>
</html>
