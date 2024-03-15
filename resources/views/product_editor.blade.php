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
<nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light" style="background: rgb(23, 30, 49);padding-top: 0;padding-bottom: 10px;height: 89px;">
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
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" style="color: lightgrey;">Consoles</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(23, 30, 49);">
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
                <li class="nav-item">
                    <a class="nav-link" href="contact.html" style="color: lightgrey;">Contact Us</a>
                </li>
                </li>
            </ul>
            <div class="d-flex custom-search-width"> <!-- custom searchbar width -->
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">
                        <i class="fas fa-search"  style="color: lightgrey;" ></i> <!-- Search image -->
                    </button>
                    <ul class="navbar-nav custom-margin-right">
                        <li class="nav-item">
                            <a class="nav-link" href="signin.html" style="color: lightgrey;background: rgb(23, 30, 49);border-radius: 10px;">Sign In</a>
                        </li>
                <li class="nav-item">
                    <button class="btn btn-outline-light ms-2" type="button">
                        <i class="fas fa-shopping-basket" style="color: lightgrey;"></i>
                        <span style="color: lightgrey;">Basket</span>
                    </button>

            </ul>
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
              <div class="form-group form-check form-check-inline">
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
  