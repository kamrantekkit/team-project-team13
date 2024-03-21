<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>order-confirmation-page</title>
    @vite(['resources/js/app.js','resources/sass/app.scss'])
    <style>
        body, .container {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
    </style>
</head>

<body>
@include("layout.header")

<div class="container">
    <div class="row justify-content-center">
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
<div class="container-fluid" style="color: rgb(34,34,34);background: rgb(34,34,34);">
    <div style="height:89px;color:var(--bs-body-color);background:var(--bs-body-color);"></div>
</div>
</body>
</html>
