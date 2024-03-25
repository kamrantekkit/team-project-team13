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
@include('layout.header')

<img id="imageSwitch" src="assets/img/Funko-Pokemon-db.webp"
     style="height: auto; width: 100vw; max-width: 100%; position: relative; display: block; margin: 0 auto;">

    <!-- Content Section -->
<div style="background: rgb(34,34,34);">
    <div style="background: rgb(250,250,245);margin-bottom: 100px;margin-top: 400px;color: rgb(250,250,245);">
        <div class="container" style="min-height: 400px;background: rgb(250,250,245);">
            <div class="row justify-content-center">
                <!-- Nintendo button and images-->
                <div class="col-md-4 text-center" style="margin-top:-350px;">
                    <a href="{{route('products.category',['Nintendo'])}}"><button class="btn mb-4" style="width:70%;background-color:#D90011;color:#ffffff;">Nintendo</button></a>
                    <img class="img-fluid" src="assets/img/Screenshot%202023-11-22%20013112.png" alt="Nintendo img">
                </div>
                <!-- Xbox button and images -->
                <div class="col-md-4 text-center" style="margin-top:-350px;">
                    <a href="{{route('products.category',['Xbox'])}}"><button class="btn mb-4" style="width:70%;background-color:#127D10;color:#ffffff;">Xbox</button></a>
                    <img class="img-fluid" src="assets/img/Screenshot%202023-11-22%20025302.png" alt="Xbox img">
                </div>
                <!-- Playstation button and images -->
                <div class="col-md-4 text-center" style="margin-top:-350px;">
                    <a href="{{route('products.category',['Playstation'])}}"><button class="btn mb-4" style="width:70%;background-color:#024EA2;color:#ffffff;">Playstation</button></a>
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
                        <a href="{{route('products.category',['PC'])}}" class="btn" style="background-color: rgb(23, 30, 49); color: #ffffff;">Shop All</a> <!-- Button linking to the shop page -->
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


                        <a href="{{route('products.category',['Accessories'])}}" class="btn" style="background-color: rgb(23, 30, 49); color: #ffffff;">Browse Accessories</a> <!-- Button linking to the accessories shop page -->
                    </div>


                    <div class="col-md-6">
                        <img src="assets/img/Accessories-image.png"  alt="Accessories Image" class="img-fluid" style="max-width: 50%; height: auto; float: right;">
                    </div>
                </div>
            </div>
            <!-- Latest Deals Section -->
            <div class="container my-5">
                <h2 class="text-center mb-4" style="font-weight: bold; color: rgb(23, 30, 49); background-color: rgb(250,250,245);">Latest Products</h2>
                <div class="row">
                    <!-- Deal 1-->
                    @foreach($products as $product)
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{asset($product->image_path)}}" class="card-img-top" alt="Deal 1">
                                <div class="card-body">
                                    <h5 class="card-title">{{$product->name}}</h5>
                                    <p class="card-text">£{{$product->price}}</p>
                                    <a href="{{route('product', ['id' => $product->id])}}" class="btn" style="background-color: rgb(23, 30, 49); color: #ffffff;">View</a>
                                </div>
                            </div>
                        </div>

                    @endforeach

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

        setInterval(function () {
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
<div style="width: 100vw; background: rgb(23, 30, 49); height: 89px;"></div>

</body>

</html>
