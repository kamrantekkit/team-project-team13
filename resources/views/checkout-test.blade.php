<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://js.stripe.com/v3/"></script>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss'])
</head>
<body>
<div class="container-fluid">
    <form id="payment-form" >
    <label for="card-element">
        Credit or debit card
    </label>

    <div id="card-element">
        <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
    </form>
</div>

<script>
    var stripe = Stripe('{{ env('STRIPE_KEY') }}');

    const appearance = {
        theme: 'night',
        labels: 'floating'
    };

    elements = stripe.elements({clientSecret:  "{{$clientSecret}}"});

    const paymentElement = elements.create("payment", elements);

    paymentElement.mount('#card-element');

    var form = document.getElementById('payment-form');
    var cardErrors = document.getElementById('card-errors');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe.confirmCardPayment("{{ $clientSecret }}", {
            payment_method: {
                card: cardElement,
            },
        }).then(function(result) {
            if (result.error) {
                // Show error to your customer
                cardErrors.textContent = result.error.message;
            } else {
                // The payment succeeded
                // You can handle success on the server side
            }
        });
    });
</script>
</body>
</html>
