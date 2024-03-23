@extends('layout.dashboard')


@section('content')
    <div class="row g-4 mb-4">
        <div class="col-lg-2 col-md-6 col-sm-12">
            <div class="form-group">
                <label>product code</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-12">
            <div class="form-group">
                <label>product name</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-12">
            <div class="form-group">
                <label>product status</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-12">
            <button class="btn btn-danger">delete</button>
            <button class="btn btn-primary">add</button>
        </div>
    </div>

    <div class="row g-4 mb-4">
        <div class="table-responsive">
            <table class="table app-table-hover mb-0 text-left">
                <thead>
                <tr>
                    <th class="cell">Product ID</th>
                    <th class="cell">Product Name</th>
                    <th class="cell">Restock Date</th>
                    <th class="cell">Quantity</th>
                    <th class="cell">Status</th>
                    <th class="cell">Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($stocks as $stock)
                    <tr>
                        <td class="cell">{{$stock->product_id}}</td>
                        <td class="cell">
                            <span class="truncate">{{$stock->product->name}}</span>
                        </td>
                        <td class="cell">{{$stock->restock_date}}</td>
                        <td class="cell">{{$stock->quantity}}</td>
                        <td class="cell">
                            @if($stock->quantity > 10)
                                <span class="badge bg-success">In Stock</span>
                            @elseif($stock->quantity <= 10 && $stock->quantity > 0)
                                <span class="badge bg-warning">Low Stock</span>
                            @elseif($stock->quantity == 0)
                                <span class="badge bg-danger">Out of Stock</span>
                            @endif
                        </td>
                        <td class="cell">
                            <a class="btn-primary btn app-btn-secondary" href="#">Update</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
