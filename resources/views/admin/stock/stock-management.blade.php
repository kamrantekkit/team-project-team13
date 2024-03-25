@extends('layout.admin_layout_dashboard')


@section('content')
    <h1 class="playportal-page-title">Stock Management</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row g-4 mb-4">
        <form method="GET" class="d-flex navbar-form ps-5 pe-5 pb-2 pt-2" action="{{route("stock.index")}}">
            {{@csrf_field()}}
            <div class="input-group ">
                <input class="form-control border-black border border-1" type="search" placeholder="Search" name="query"
                       aria-label="Search">
                <button class="btn btn-outline-light border-black border border-1" type="submit">
                    <i class="fas fa-search" style="color: black;"></i> <!-- Search image -->
                </button>
            </div>
        </form>
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
                        <td class="cell">{{$stock->restock_date ? $stock->restock_date->format('d-m-Y') : ""}}</td>
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
                            <a class="btn-primary btn app-btn-secondary"
                               href="{{route('stock.view', ['id' => $stock->id])}}">Update</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="m-3">
                {{$stocks->links('pagination::bootstrap-5')}}
            </div>
        </div>
    </div>
@endsection
