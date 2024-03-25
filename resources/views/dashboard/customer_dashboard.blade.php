@extends('layout.customer_layout_dashboard')


@section('content')
    <div class="container mt-4">
        <h1 class="playportal-page-title">My Orders</h1>
        <!-- Order Summary Card -->
        @foreach($orders as $order)
            <div class="card mb-3">
                <div class="card-header">
                    Order #{{$order['id']}}
                </div>
                <div class="card-body">
                    <!-- Item -->
                    @foreach($order->products as $product)
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex align-items-center">
                                <img src="{{asset($product->image_path)}}" class="img-thumbnail me-2"
                                     style="width: 100px;" alt="Spider-Man">
                                <div>
                                    <h5 class="mb-0">{{$product->name}}</h5>
                                    <p class="mb-0">{{$product->description}}</p>
                                </div>
                            </div>
                            <div class="col-2 flex-column ">
                                <div >
                                    <span>£ {{$product->price * $product->pivot->quantity}}</span>
                                </div>
                                <div >
                                    <span>QTY: {{$product->pivot->quantity}}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="text-end">
                        <span class="text-muted">Order Placed: {{$order->created_at}}</span>
                    </div>
                </div>

            </div>
        @endforeach
    </div>

@endsection
