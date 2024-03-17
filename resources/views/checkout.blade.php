<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Checkout</title>

    @vite(['resources/sass/app.scss'])
</head>

<body>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light"
     style="background: rgb(34, 34, 34);border-radius: 20;border-top-left-radius: 20;border-top-right-radius: 20;border-bottom-right-radius: 20;border-bottom-left-radius: 20;padding-top: 0;padding-bottom: 10px;">
    <div class="container">
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span
                class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div><a class="navbar-brand" href="#"><span>PlayPortal</span> </a></div>
        <div class="collapse navbar-collapse" id="navcol-1" style="color: rgb(255,255,255);">
            <ul class="navbar-nav nav-right">
                <li class="nav-item"><a class="nav-link active" href="index.html" style="color: rgba(224,217,217,0.9);">Home</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="about.html"
                                        style="color: rgba(224,217,217,0.9);">Games</a></li>
                <li class="nav-item"><a class="nav-link" href="#" style="color: rgb(224,217,217,0.9);">Consoles</a></li>
                <li class="nav-item"><a class="nav-link" href="faq.html" style="color: rgba(224,217,217,0.9);">Accessories</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="contact.html" style="color: rgba(224,217,217,0.9);">About
                        us&nbsp;</a></li>
            </ul>
            <p class="ms-auto navbar-text actions" style="text-align: right;"><a class="login" href="login.html"
                                                                                 style="color: rgba(224,217,217,0.9);">Log
                    In</a> <a class="btn btn-light action-button" role="button" href="signup.html"
                              style="color: rgba(0,0,0,0.9);background: var(--bs-gray-200);border-radius: 10px;border-style: solid;border-color: rgba(0,0,0,0.9);font-size: 16px;padding: 5px 8px;">Sign
                    Up</a></p>
        </div>
    </div>
</nav>
<div style="height: 500px;border-color: var(--bs-body-bg);">
    <div class="container py-4 py-xl-5">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-12 mt-2">
                <div class="card">
                    <div class="card-body">
                        <form id="payment-form">
                            @csrf
                            <h5 class="card-title" style="text-align: center">Contact Details</h5>
                            <h6>We Will use this details </h6>
                            <div class="form-group">
                                <label for="email">
                                    <h6 class="mt-4" style="border-bottom: solid;border-width: 1px;">Email Address</h6>
                                </label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                       required>
                            </div>

                            <label for="card-element">
                                <h6 class="mt-4" style="border-bottom: solid;border-width: 1px;">Shipping Address</h6>
                            </label>

                            <div id="address-element">
                                <!-- A Stripe Element will be inserted here. -->
                            </div>

                            <label for="card-element">
                                <h6 class="mt-4" style="border-bottom: solid;border-width: 1px;">Credit or debit
                                    card</h6>
                            </label>

                            <div id="card-element">
                                <!-- A Stripe Element will be inserted here. -->
                            </div>

                            <!-- Used to display form errors. -->
                            <div id="card-errors" role="alert"></div>

                            <div class="mt-3" style="display: flex;justify-content: space-around;flex-wrap: wrap; ">
                                <button class="btn btn-primary mt-1">Save and Proceed</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-12 mt-2">
                <div class="card">
                    <div class="card-body" style="min-le">
                        <div style="display: flex;justify-content: space-between; border-bottom: solid;
                            border-width: 1px;
                            padding-bottom: 5px;">
                            <div>
                                <h6>Your basket contains {{count($basket)}} items</h6>
                                <a href="{{route('basket')}}">Edit</a>
                            </div>
                            >
                        </div>
                        @foreach($basket as $product)
                            <div class="card mb-3 mt-3" style="max-width: 540px;">
                                <div class="row no-gutters">
                                    <div class="col-lg-2 col-md-2 col-sm-2" style="    display: flex;
                                  align-content: center;
                                  justify-content: space-between;
                                  align-items: center;">
                                        <img src="{{asset($product["image_path"])}}"
                                             class="img-thumbnail checkout-game-image" alt="item image">
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <div class="card-body">
                                            <h6 class="card-title" style="font-weight: 600">{{$product["name"]}}</h6>
                                            <div style="display: flex;justify-content: space-between;    border-bottom: solid;
                                        border-width: 1px;">
                                                <p class="card-text">new</p>
                                                <p style="font-size: 12px;
                                            font-weight: 600;">£{{$product['price']}}</p>
                                            </div>
                                            <p class="card-text"><small
                                                    class="text-muted">QTY: {{$product['quantity']}} </small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div style="display: flex;justify-content: space-between" class="mt-2">
                            <span style="font-weight: 600">Order Total</span>
                            <span style="font-weight: 600">£{{$totalCost}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('{{ env('STRIPE_KEY') }}');

    const appearance = {
        theme: 'night',
        labels: 'floating'
    };
    const options = {mode: 'shipping'};

    elements = stripe.elements({clientSecret: "{{$clientSecret}}"});
    const addressElement = elements.create("address", options);
    const paymentElement = elements.create("payment", elements);

    addressElement.mount('#address-element')
    paymentElement.mount('#card-element');


    var form = document.getElementById('payment-form');
    var cardErrors = document.getElementById('card-errors');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        var formData = new FormData(event.target);

        stripe.confirmPayment({
            elements,
            confirmParams: {
                return_url: '{{route('order.confirm')}}',
                payment_method_data: {
                    billing_details: {
                        email: String(formData.get('email')),
                    }
                },
            },
        }).then(function (result) {
            if (result.error) {
                // Inform the customer that there was an error.
                cardErrors.innerHTML = result.error.message
            }
        });
    });
</script>
</body>

</html>
