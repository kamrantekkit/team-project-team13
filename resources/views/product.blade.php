<!doctype html>
<html lang="en">
@include("layout.header")
<body style="background: rgb(255, 183, 253)">
<!--  Navbar section -->
@include("layout.navbar")
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="media d-flex align-items-end">
                <div class="preview"><img class="image active" src="{{asset($product->image_path)}}" data-reflow-preview-type="image" width="500" height="500"/></div>
                    <div class="reflow-add-to-cart" style="margin: 160px">
                        <form method="post" action="{{route("basket.add")}}">
                            @csrf
                            <input type="hidden" name="id" value="{{$product->id}}">
                        <div class="quantity-widget">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="1"
                                       pattern="/^\d+$/" min="1" value="1" style=" width: 100px" required>
                                <label for="quantity">Quantity</label>
                                <button type="submit" class="btn btn-primary mt-2" style="width:180px; height:40px;">Add to Cart</button>
                            </div>
                        </div>
                        </form>
                    </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="product-data">
                <h2 class="product-name">{{$product->name}}</h2>
                <div class="original-price">£{{$product->price}}</div>
                <div class="description">{{$product->description}}</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
