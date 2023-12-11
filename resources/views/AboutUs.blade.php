<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

@include("layout.header")
<body style="background: rgb(255,183,253);">

@include("layout.navbar")
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | PlayPortal</title>
    <style>
        .bg-image {
            background: url('{{asset('assets/img/BHPUd0d.jpg')}}') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
        }

        .about-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .blue-text {
            color: #007BFF;
        }

        .paragraph {
            line-height: 1.6;
        }
    </style>
</head>


<div class="container-fluid bg-image">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="about-container">
                <h1 class="blue-text">Welcome to PlayPortal</h1>
                <h2 class="blue-text">Your Ultimate Gaming Portal</h2>
                <p class="paragraph">PlayPortal is dedicated to supplying high-quality products and equipment to gamers with a profound passion for gaming. We curate a collection that appeals to all gaming levels and tastes, whether you're a casual gamer, eSports enthusiast, or involved in game streaming.</p>

                <p class="paragraph">We prioritize quality by offering products from reputable brands and incorporating cutting-edge technology that has been rigorously tested and reviewed by our specialists. With our up-to-date offerings, you can stay ahead of the gaming world.</p>

                <p class="paragraph">Our primary goal is to provide exceptional service and ensure timely shipments to our customers. Choose PlayPortal as your gaming gear destination and embark on a professional gaming experience. It's game time!</p>
            </div>
        </div>
    </div>
</div>


</body>
</html>
