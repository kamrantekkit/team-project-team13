<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

@include("layout.header")
<body>
<!--  Navbar section -->
@include("layout.navbar")

<div class="container">

    <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-12 ">
            <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                @foreach($products as $product)
                    <div class="card" style="background-color: #f6eaf8;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <img src="{{asset($product['image_path'])}}" class="img-thumbnail" alt="Item Image">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <p>{{$product['name']}}</p>
                                    <p>Price: £{{$product['price']}} </p>
                                    <p>Quantity: {{$product['quantity']}} </p>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-3">
                                <form method="post" action="{{route('basket.update')}}" class="mr-2">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$product['id']}}">
                                    <label for="quantity" class="col-sm-3 col-form-label">Qty</label>
                                    <input type="number" min="0" id="quantity" name="quantity" class="form-control">
                                    <button type="submit" class="btn btn-primary mt-2">
                                        Update
                                    </button>
                                </form>

                                <form method="post" action="{{route('basket.remove')}}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$product['id']}}">
                                    <button type="submit" class="btn btn-primary mt-2">
                                        Remove
                                    </button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row mt-3 mb-4">
                <div class="col-md-11 col-sm-11">
                    <div class="card" style="background-color: #f6eaf8;">
                        <div class="card-body">
                            <p>Order Total ( {{$basketCount}} item): £{{$basketCost}}</p>
                            <div style="display: flex;
                        justify-content: center;">
                                <a href="{{route("order.checkout")}}" class="btn btn-primary">SECURE CHECKOUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- <div class="card text-center">
                <div class="card-header">
                    Cart
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                            <input type="button" value="Update" class="btn btn-primary"/>
                        </div>
                    </div>
                </div>
              </div> --}}

        </div>
</body>

</html>
