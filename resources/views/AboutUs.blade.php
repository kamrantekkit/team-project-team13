<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

@include("layout.head", ['title' => 'About Us'])

<body style="background: #FAFAF5;">
@include('layout.header')

<div class="container-fluid bg-image"
     style="display: flex; justify-content: center; align-items: center; height: 85vh;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="about-container">
                <h1 style="font-family: 'Inter', sans-serif; font-size: 45px; font-weight: bold; text-align: center;">
                    Welcome to PlayPortal</h1>
                <h2 style="font-family: 'Inter', sans-serif; font-size: 36px; font-weight: semi-bold; text-align: center;">
                    The Best Gaming Portal</h2>
                <p style="font-family: 'Inter', sans-serif; font-size: 20px; text-align:justify;">PlayPortal is a
                    standout choice for gamers looking for top-notch goods and outstanding support. We guarantee that
                    every player may find just what they need thanks to our wide range, which is hand-picked by gaming
                    professionals. We have everything, from elegant accessories to high-performance gear. Furthermore,
                    you can rely on PlayPortal to keep you at the forefront of the gaming industry because of our
                    dedication to staying ahead of the most recent developments in gaming trends and technology.</p>
                <hr>
                <p style="font-family: 'Inter', sans-serif; font-size: 26px; font-weight: bold; text-align: center;">
                    Have any questions?</p>
                <!-- Contact Us Page Button -->
                <a href="ContactUs.html" class="btn btn-primary"
                   style="font-size: 30px; font-weight: bold; background-color: black; color: white; border: none; border-radius: 10px; padding: 10px 20px; text-decoration: none; display: block; margin: 0 auto;">Contact
                    Us</a>
            </div>
        </div>
    </div>
</div>


<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/Navbar---Apple-navbar---apple.js"></script>
</body>

</html>
