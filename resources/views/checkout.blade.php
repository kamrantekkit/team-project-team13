<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

@include("layout.header")

<body style="background: rgb(255,183,253);">

<!--  Navbar section -->
@include("layout.navbar")

<div style="background: rgb(255,183,248);height: 500px;border-color: var(--bs-body-bg);">
    <div class="container py-4 py-xl-5">
        <div class="row">
            <div class="col-md-4 col-sm-12 offset-md-1 mt-2">
                <div class="card">
                    <div class="card-body">
                        <form id="payment-form">
                            @csrf
                            <h5 class="card-title" style="text-align: center">Contact Details</h5>
                            <h6>We Will use this details </h6>

{{--                            <input type="text" placeholder="Name*" name="name" pattern="^[A-Za-z\s]+$" class="form-control mt-3"/>--}}
{{--
{{--                            <input type="" placeholder="Country / Region*" class="form-control mt-3"/>--}}
{{--                            <input type="text" placeholder="Street address" class="form-control mt-3"/>--}}
{{--                            <input type="text" placeholder="town / city" class="form-control mt-3"/>--}}
{{--                            <input type="text" placeholder="pastcode" class="form-control mt-3"/>--}}

{{--                            <div class="mt-3" style="display: flex;justify-content: space-around;flex-wrap: wrap; ">--}}
{{--                                <button class="btn btn-primary mt-1">Save and Proceed</button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                        <form id="payment-form" class="hiding">--}}

                            <div class="form-group">
                                <label for="email">
                                    <h6 class="mt-4" style="border-bottom: solid;border-width: 1px;">Email Address</h6>
                                </label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>

                            <label for="card-element">
                                <h6 class="mt-4" style="border-bottom: solid;border-width: 1px;">Shipping Address</h6>
                            </label>

                            <div id="address-element">
                                <!-- A Stripe Element will be inserted here. -->
                            </div>

                            <label for="card-element">
                                <h6 class="mt-4" style="border-bottom: solid;border-width: 1px;">Credit or debit card</h6>
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
            <div class="col-md-6 col-sm-12 mt-2">
                <div class="card">
                    <div class="card-body" style="min-le">
                        <div style="display: flex;justify-content: space-between; border-bottom: solid;
                            border-width: 1px;
                            padding-bottom: 5px;">
                            <div>
                                <h6>Your basket contains {{count($basket)}} items</h6>
                                <a href="{{route('basket')}}">Edit</a>
                            </div>
                        </div>
                        @foreach($basket as $product)
                            <div class="card mb-3 mt-3" style="max-width: 540px;">
                                <div class="row no-gutters">
                                    <div class="col-md-2" style="    display: flex;
                                  align-content: center;
                                  justify-content: space-between;
                                  align-items: center;">
                                        <img style="margin-left: 10px;" src="{{secure_asset($product["image_path"])}}"
                                             class="card-img" alt="item image">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h6 class="card-title" style="font-weight: 600">{{$product["name"]}}</h6>
                                            <div style="display: flex;justify-content: space-between;    border-bottom: solid;
                                        border-width: 1px;">
                                                <p class="card-text">{{$product['description']}}</p>
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

{{--                            <div style="border-bottom: solid;border-width: 1px;">--}}
{{--                                <div style="display: flex;justify-content: space-between">--}}
{{--                                    <span class="text-muted">Order Sub-Total</span>--}}
{{--                                    <span class="text-muted">888$</span>--}}
{{--                                </div>--}}
{{--                                <div style="display: flex;justify-content: space-between">--}}
{{--                                    <span class="text-muted">Delivery Charges</span>--}}
{{--                                    <span class="text-muted">888$</span>--}}
{{--                                </div>--}}
{{--                                <div style="display: flex;justify-content: space-between">--}}
{{--                                    <span class="text-muted">Discount</span>--}}
{{--                                    <span class="text-muted">888$</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
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
{{--    <div style="height: 500px;background: rgb(34,34,34);">--}}
{{--        <div style="background: #ffffff;height: 411.6667px;margin-bottom: 100px;margin-top: 400px;"></div>--}}
{{--    </div>--}}
<section>
</section>
<script>
    const stripe = Stripe('{{ env('STRIPE_KEY') }}');

    const appearance = {
        theme: 'night',
        labels: 'floating'
    };
    const options = { mode: 'shipping' };

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
