<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Product List</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss','resources/css/product-styles.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>


<!--  page background -->
<body style="background: rgb(250,250,245); ">
@include('layout.header')

<div class="breadcrumb-area" style="background-image:url({{asset('assets/img/product-list-background.png')}});">
    <div class="container">
        <div class="in-breadcrumb">
            <div class="row">
                <div class="col">
                    <h3>
                        @if(isset($Category))
                            {{$Category}}
                        @elseif(isset($query))
                            Search results for "{{$query}}"
                        @else
                            All Products
                        @endif
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>

<main class="page-content">
    <div class="shop-area section-pb section-pt-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-lg-1 order-2">
                    <div class="row widgets sidebar">
                        <div class="col-lg-12">
                            <div class="single-widget widget-categories p-2">
                                <h4 class="widget-title">
                                    <span>Tags</span>
                                </h4>
                                <form id="tags" method="GET" action="@if(isset($Category)) {{route('products.category', [$Category])}} @elseif(isset($query)) {{route('products.search')}} @else {{route('products')}} @endif">
                                    @if(isset($query))
                                        <input type="hidden" name="query" value="{{$query}}">
                                    @endif
                                    @foreach($tags as $tag)
                                        <div class="tag m-1">
                                            <input type="checkbox" id="{{$tag['id']}}" name="tags[]" value="{{$tag['id']}}" @if($tag['selected']) checked @endif>
                                            <label for="{{$tag['id']}}" >
                                                {{$tag['name']}}
                                            </label>
                                        </div>
                                    @endforeach

                                </form>
                                <div class="d-flex justify-content-center align-items-center m-2">
                                    <button id="submit-button" type="button" class="btn btn-primary">Filter</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-lg-2 order-1">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="shop-top-bar mt--30">
                                <div class="shop-bar-inner">
                                    <div class="toolbar-amount">
                                        <span>Showing {{ $productPages->firstItem() }} to {{ $productPages->lastItem() }} of {{ $productPages->total() }} results</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-products-wrapper">
                        <div class="tab-content">
                            <div id="grid-view" class="tab-pane active">
                                <div class="shop-product-area">
                                    <div class="row">
                                        @foreach($productPages as $product)
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="single-product mt--30">
                                                <div class="single-product-image">
                                                    <a href='{{route("product",[$product->id])}}'><img src="{{asset($product->image_path)}}" alt=""></a>
                                                    <div class="product-action">
                                                        <ul>
                                                            <li>
                                                                <a href="{{route("product",[$product->id])}}"><i class="bi bi-cart-plus-fill"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product-contnet">
                                                    <h5><a href='product-page.html'>{{$product->name}}</a></h5>
                                                    <div class="price-box">
                                                        <span class="NEW RELEASE-price">£{{$product->price}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div class="paginatoin-area ">
                                <div class="row">
                                    <div class="col-lg-12 mt-2">
                                        {{$productPages->links('pagination::bootstrap-5')}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    document.getElementById('submit-button').addEventListener('click', function() {
        document.getElementById('tags').submit();
    });
</script>
@include('layout.footer')
</body>
</html>
