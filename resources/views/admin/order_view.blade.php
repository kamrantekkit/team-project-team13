@extends('layout.admin_layout_dashboard')

@section('content')
    <div class="container mt-5">
        <h1 class="playportal-page-title text-center mb-5">Viewing Order #{{$order->id}}</h1>
        <div class="card">
            <div class="card-header">
                <h2>Order Details</h2>
            </div>
            <div class="card-body">
                <table class="table table-striped mb-4">
                    <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($order->products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->pivot->quantity }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-header">
                <h2>User Details</h2>
            </div>
            <div class="card-body">
                <h5>Name: {{ $order->user->name }}</h5>
                <h5>Email: {{ $order->user->email }}</h5>
                <h5>Phone: {{ $order->user->phone }}</h5>
                @if(!empty($address))
                    <h5>Address: {{$address->line1}}, {{$address->city}}, {{$address->postal_code}}, {{$address->country}}</h5>
                @else
                    <h5>Address: No billing details available</h5>
                @endif
            </div>
        </div>
        <div class="mt-4">
            <p class="mb-4"><strong>Current Status:</strong>
                @if($order['status'] == 'pending')
                    <span class="badge bg-warning">Requires Processing</span>
                @elseif($order['status'] == 'completed')
                    <span class="badge bg-success">Completed</span>
                @elseif($order['status'] == 'cancelled')
                    <span class="badge bg-danger">Cancelled</span>
                @endif
            </p>
            <div class="d-flex justify-content-start mb-3">
                @if ($order->status != 'completed')
                    <form action="{{ route('admin.orders.process', $order->id) }}" method="POST" class="me-2">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-primary">Process Order</button>
                    </form>
                @endif
                @if ($order->status != 'cancelled')
                    <form action="{{ route('admin.orders.cancel', $order->id) }}" method="POST" class="me-2">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-danger">Cancel Order</button>
                    </form>
                @endif
                <a href="{{ route('admin.dashboard')  }}" class="btn btn-secondary">Go Back</a>
            </div>
        </div>
    </div>
@endsection
