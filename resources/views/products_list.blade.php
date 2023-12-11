<!doctype html>
<html lang="en">
@include("layout.header")
<body style="background: rgb(255, 183, 253)">
<!--  Navbar section -->
@include("layout.navbar")
<h1 style="padding: 30px 20px; border-bottom: 2px solid black; margin: 0px 15px;">Latest Products</h1>
<div class="wrapper" style="display: flex; width: 100%;">
    <div class="filter">
        <form method="GET" action="{{route("products", [$Category])}}">
            @csrf
            <label for="tags" class="label" style="margin-left: 10px;">Tags</label>
            @foreach($tags as $tag)
                <div class="form-check" style="margin-left: 10px">
                    <input class="form-check-input" type="checkbox" value="{{$tag['id']}}" name="tags[]" id="{{$tag['id']}}" @if($tag['selected']) checked @endif>
                    <label class="form-check-label" for="{{$tag['id']}}" >
                        {{$tag['name']}}
                    </label>
                </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Create</button>
        </form>


    </div>
    <div class="container" style="margin-top: 15px;">
        <div class="container">
            <div class="row">
                @foreach($productPages as $product)
                    <div class="col-md-2" style="margin: 20px;">
                        <div class="card" style="width: 200.0px;height: 280px;padding: 20px;">
                            <img src="{{asset($product->image_path)}}" class="card-img-top" alt="Product Image"
                                 width="250" height="250">
                            <div class="card-body">
                                <h5 class="card-title">{{$product->name}}</h5>
                                <p class="card-text">£{{$product->price}}</p>
                                <a href="{{route("product",[$product->id])}}" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                {{ $productPages->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>

</body>
</html>
