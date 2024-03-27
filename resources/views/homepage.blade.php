<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>homepage version 7</title>
    @vite(['resources/js/app.js','resources/sass/app.scss'])

    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">


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

    .btn:focus {
        box-shadow: 0 0 0 3px rgb(102, 174, 232); /* blue outline when buttons pressed */
    }




</style>
</head>

<!--  page background -->
<body style="background: rgb(250,250,245);height: 1500px;">
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
                    <a class="nav-link" href="about-us.html" style="color: lightgrey;">About Us</a>
                <li class="nav-item">
                    <a class="nav-link" href="contact-us.html" style="color: lightgrey;">Contact Us</a>
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
        </div>
    </div>
    User
</nav><div></div> <img id="imageSwitch" src="assets/img/Funko-Pokemon-db.webp" alt="banner image" style="height: auto; width: 100vw; max-width: 100%; position: relative; display: block; margin: 0 auto;">



    <!-- Content Section -->
<div style="background: rgb(34,34,34);">
    <div style="background: rgb(250,250,245);margin-bottom: 100px;margin-top: 400px;color: rgb(250,250,245);">
        <div class="container" style="min-height: 400px;background: rgb(250,250,245);">
            <div class="row justify-content-center">
                <!-- Nintendo button and images-->
                <div class="col-md-4 text-center" style="margin-top:-350px;">
                    <button class="btn mb-4" style="width:70%;background-color:#D90011;color:#ffffff;">Nintendo</button>
                    <img class="img-fluid" src="assets/img/Screenshot%202023-11-22%20013112.png" alt="Nintendo img">
                </div>
                <!-- Xbox button and images -->
                <div class="col-md-4 text-center" style="margin-top:-350px;">
                    <button class="btn mb-4" style="width:70%;background-color:#127D10;color:#ffffff;">Xbox</button>
                    <img class="img-fluid" src="assets/img/Screenshot%202023-11-22%20025302.png" alt="Xbox img">
                </div>
                <!-- Playstation button and images -->
                <div class="col-md-4 text-center" style="margin-top:-350px;">
                    <button class="btn mb-4" style="width:70%;background-color:#024EA2;color:#ffffff;">Playstation</button>
                    <img class="img-fluid" src="assets/img/Screenshot%202023-11-22%20025327.png" alt="Playstation img">
                </div>
            </div>

            <!-- PC Section -->
            <div class="container my-5">
                <div class="row align-items-center">
                    <!-- PC paragraph -->
                    <div class="col-md-6">
                        <h2 style="font-weight: bold; color: rgb(23, 30, 49);">Gaming PCs</h2>
                        <p style="color: rgb(23, 30, 49);">Experience a whole new level of immersion</p>
                        <p style="color: rgb(23, 30, 49)">Unleash stunning graphics and ultra-fast performance with our latest gaming rigs. Whether it's for competitive eSports or immersive single-player adventures, these gaming PCs deliver exceptional performance.</p>

                        <!-- Shop All Button -->
                        <a href="PC.html" class="btn" style="background-color: rgb(23, 30, 49); color: #ffffff;">Shop All</a> <!-- Button linking to the shop page -->
                    </div>

                    <!-- PC image -->
                    <div class="col-md-6">
                        <img src="assets/img/pc-image.png" alt="PC Image" class="img-fluid" style="max-width: 50%; height: auto; float: right;">
                    </div>
                </div>
            </div>

            <!-- Accessories Section -->
            <div class="container my-5">
                <div class="row align-items-center">

                    <div class="col-md-6">
                        <h2 style="font-weight: bold; color: rgb(23, 30, 49);">Gaming Accessories</h2>
                        <p style="color: rgb(23, 30, 49);">Enhance your gaming experience</p>
                        <p style="color: rgb(23, 30, 49);">Discover our wide range of gaming accessories. From high-performance controllers to spatial audio headsets, find everything you need to take your gaming to the next level.</p>


                        <a href="accessories.html" class="btn" style="background-color: rgb(23, 30, 49); color: #ffffff;">Browse Accessories</a> <!-- Button linking to the accessories shop page -->
                    </div>


                    <div class="col-md-6">
                        <img src="assets/img/Accessories-image.png" alt="Accessories Image" class="img-fluid" style="max-width: 50%; height: auto; float: right;">
                    </div>
                </div>
            </div>
            <!-- Latest Deals Section -->
            <div class="container my-5">
                <h2 class="text-center mb-4" style="font-weight: bold; color: rgb(23, 30, 49); background-color: rgb(250,250,245);">Latest Deals</h2>
                <div class="row">
                    <!-- Deal 1-->
                    <div class="col-md-3">
                        <div class="card">
                            <img src="assets/img/Untitled.png" class="card-img-top" alt="Deal 1">
                            <div class="card-body">
                                <h5 class="card-title">Deal 1</h5>
                                <p class="card-text">£</p>
                                <a href="#" class="btn" style="background-color: rgb(23, 30, 49); color: #ffffff;">View Deal</a>

                            </div>
                        </div>
                    </div>
                    <!-- Deal 2 -->
                    <div class="col-md-3">
                        <div class="card">
                            <img src="assets/img/Untitled.png" class="card-img-top" alt="Deal 2">
                            <div class="card-body">
                                <h5 class="card-title">Deal 2</h5>
                                <p class="card-text">£</p>
                                <a href="#" class="btn" style="background-color: rgb(23, 30, 49); color: #ffffff;">View Deal</a>
                            </div>
                        </div>
                    </div>
                    <!-- Deal 3 -->
                    <div class="col-md-3">
                        <div class="card">
                            <img src="assets/img/Untitled.png" class="card-img-top" alt="Deal 3">
                            <div class="card-body">
                                <h5 class="card-title">Deal 3</h5>
                                <p class="card-text">£</p>
                                <a href="#" class="btn" style="background-color: rgb(23, 30, 49); color: #ffffff;">View Deal</a>
                            </div>
                        </div>
                    </div>
                    <!--  Deal 4 -->
                    <div class="col-md-3">
                        <div class="card">
                            <img src="assets/img/Untitled.png" class="card-img-top" alt="Deal 4">
                            <div class="card-body">
                                <h5 class="card-title">Deal 4</h5>
                                <p class="card-text">£</p>
                                <a href="#" class="btn" style="background-color: rgb(23, 30, 49); color: #ffffff;">View Deal</a>
                            </div>
                        </div>
                    </div>







                </div>
            </div>
        </div>


            <script>
    document.addEventListener('DOMContentLoaded', function() {
        let images = [
            "assets/img/Funko-Pokemon-db.webp",
            "assets/img/AloneInTheDark-db.jpg",
            "assets/img/DisneyLorcana-ITI-db.webp"
        ];
        let currentImage = 0;

        setInterval(function() {
            currentImage++;
            if (currentImage >= images.length) {
                currentImage = 0;
            }
            document.getElementById('imageSwitch').src = images[currentImage];
        }, 5000); // images alternate every 5 seconds
    });
</script>

            </div>
        </div>


<!-- Footer -->
<footer style="width: 100%; background: rgb(23, 30, 49); color: white; padding: 40px 0;">
    <div class="container">
        <div class="row justify-content-center text-center text-md-left">
            <!-- Contact Us links -->
            <div class="col-md-4">
                <h5 style="color: #ffffff; cursor: pointer;" onclick="window.location.href='mailto:support@playportal.com';">Contact Us</h5>
                <p style="color: lightgrey;">Email: <a href="mailto:support@playportal.com" style="color: lightgrey; text-decoration: none;">support@playportal.com</a></p>
                <p style="color: lightgrey;">Phone: +44 1234 567890</p>
            </div>


        </div>
    </div>
</footer>





</body>

</html>
