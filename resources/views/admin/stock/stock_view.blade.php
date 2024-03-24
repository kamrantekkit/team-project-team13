@extends('layout.dashboard')


@section('content')
    <h1 class="playportal-page-title">Update Stock</h1>
    <div class="card">
        <div class="card-body">

            <form METHOD="POST" action="{{route('stock.update')}}">
                @method('PUT')
                @csrf
                <input type="hidden" name="id" value="{{$stock->id}}">
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" class="form-control @error('quantity') @enderror " id="quantity" name="quantity" value="{{$stock->quantity}}" placeholder="Enter quantity">
                    @error('quantity')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="restock_date">Restock Date</label>
                    <input type="date" class="form-control" id="restock_date" min="{{ date('Y-m-d') }}" value="{{ $stock->restock_date ? $stock->restock_date : Date::now() }}" name="restock_date">
                    @error('restock_date')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>
@endsection
