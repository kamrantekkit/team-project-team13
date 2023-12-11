<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>order-confirmation-page</title>
    @vite(['resources/js/app.js','resources/sass/app.scss'])
</head>

<body>
@include("layout.navbar")
    <div class="container-fluid" style="height:480px;background:rgb(255,183,253);">
        <div class="row h-100"><div class="container-fluid" style="background:rgb(255,183,253);height:400px; margin-top: 40px;">
    <div class="row h-100">

        <div class="col-md-12 d-flex flex-column justify-content-center align-items-center">
            <!-- Confirmation Message -->
            <div class="card rounded" style="max-width: 36rem; min-height: 200px; background-color: white; color: black; border-radius: 15px;">
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <h3 class="card-title mb-3" style="color:black;">Thank You for Your Order!</h3>
                    <p class="card-text" style="color:black;">Your order has been placed successfully. You will receive a confirmation email with the details shortly.</p>
                    <!-- Return to Shopping Button -->
                    <a class="btn btn-dark mt-4" role="button" href="{{route("home")}}" style="height: 38px;">Return to Shopping</a>
                </div>
            </div>
        </div>
    </div>
</div></div>
    </div>
    <div class="container-fluid" style="color: rgb(34,34,34);background: rgb(34,34,34);">
        <div style="height:89px;color:var(--bs-body-color);background:var(--bs-body-color);"></div>
    </div>
</body>

</html>
