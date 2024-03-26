@extends('layout.admin_layout_dashboard')


@section('content')
    <h1 class="playportal-page-title">Viewing Order #{{$order->id}}</h1>
    <div class="container">
        <h2 class="mb-4">Order Details</h2>
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
        <p class="mb-4"><strong>Current Status:</strong> {{ $order->status }}</p>
        <div class="d-flex justify-content-start mb-3">
            <form action="{{ route('admin.orders.process', $order->id) }}" method="POST" class="me-2">
                @csrf
                @method('PUT')
                <button type="submit" class="btn btn-primary">Process Order</button>
            </form>
            <form action="{{ route('admin.orders.cancel', $order->id) }}" method="POST" class="me-2">
                @csrf
                @method('PUT')
                <button type="submit" class="btn btn-danger">Cancel Order</button>
            </form>
            <a href="{{ route('admin.dashboard')  }}" class="btn btn-secondary">Go Back</a>
        </div>
    </div>
@endsection