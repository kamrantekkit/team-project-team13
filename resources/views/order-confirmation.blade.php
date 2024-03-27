<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>order-confirmation-page</title>
    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
</head>

<body class="d-flex flex-column  min-vh-100" >
@include("layout.header")
<div class="container flex-grow-1 d-flex align-items-center justify-content-center">
    <div class="row justify-content-center d-flex">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="card-title">Thank You for Your Order!</h3>
                    <p class="card-text">Your order has been placed successfully. You will receive a confirmation email
                        with the details shortly.</p>
                    <a class="btn btn-primary" href="{{route("home")}}">Return to Shopping</a>
                </div>
            </div>
        </div>
    </div>
</div>
@include("layout.footer")
</body>
</html>
