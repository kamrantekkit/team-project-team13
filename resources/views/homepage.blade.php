<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>homepage version 5</title>
    @vite(['resources/js/app.js','resources/sass/app.scss'])

    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">

</head>
<!--  page background -->
<body style="background: rgb(250,250,245);height: 1500px;">
@include('layout.navbar')

<div><img id="imageSwitch" src="assets/img/Funko-Pokemon-db.webp" style="height: auto; width: 100vw; max-width: 100%; position: relative; display: block; margin: 0 auto;"></div>

<!-- Content Section -->
<div style="height: 0px;background: rgb(34,34,34);">
    <div style="background: rgb(250,250,245);margin-bottom: 100px;margin-top: 400px;color: rgb(250,250,245);">
        <div class="container" style="min-height: 400px;background: rgb(250,250,245);">
            <div class="row justify-content-center">
                <!-- Nintendo button and images-->
                <div class="col-md-4 text-center" style="margin-top:30px;"><button class="btn mb-4" style="width:70%;background-color:#D90011;color:#ffffff;">Nintendo</button><img class="img-fluid" src="assets/img/Screenshot%202023-11-22%20013112.png" alt="Nintendo img"></div>
                <!-- Xbox button and images -->
                <div class="col-md-4 text-center" style="margin-top:30px;"><button class="btn mb-4" style="width:70%;background-color:#127D10;color:#ffffff;">Xbox</button><img class="img-fluid" src="assets/img/Screenshot%202023-11-22%20025302.png" alt="Xbox img"></div>
                <!-- Playstation button and images -->
                <div class="col-md-4 text-center" style="margin-top:30px;"><button class="btn mb-4" style="width:70%;background-color:#024EA2;color:#ffffff;">Playstation</button><img class="img-fluid" src="assets/img/Screenshot%202023-11-22%20025327.png" alt="Playstation img"></div>
                <!-- PC button and images -->
                <div class="col-md-4 text-center" style="margin-top:30px;"><button class="btn mb-4" style="width:70%;background-color:#225B7C;color:#ffffff;">PC</button><img class="img-fluid" src="assets/img/Screenshot%202023-11-22%20031453.png" style="width:300px;" alt="PC img"></div>
            </div>
        </div>
        <div></div>
        <!-- Accessories button and 3 images -->
        <div class="container-fluid text-center" style="height:250px;background:var(--bs-secondary-border-subtle);margin-top:50px;">
            <div class="row justify-content-evenly align-items-center h-100" style="color: rgb(250,250,245);background: rgb(250,250,245);">
                <div class="col-md-3 mt-4"><a class="btn btn-primary w-100 mb-3" role="button" href="#" style="margin-top:-170px;background-color:#000;border:none;">Accessories</a></div>
            </div>
            <div class="row justify-content-evenly align-items-center h-100" style="background: rgb(250,250,245);">
                <div class="col-md-3 mb-3" style="margin-top:-420px;"><img src="assets/img/Screenshot%202023-11-27%20231603.png" style="width:175px;"></div>
                <div class="col-md-3 mb-3" style="margin-top:-420px;"><img src="assets/img/Screenshot%202023-11-27%20231542.png" style="width:175px;"></div>
                <div class="col-md-3 mb-3" style="margin-top:-420px;"><img src="assets/img/Screenshot%202023-11-27%20214411.png" style="width:175px;"></div>
            </div>
        </div>
        <div style="background: rgb(34, 34, 34);height: 89px;margin-top: 230px;"></div>
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
</body>

</html>
