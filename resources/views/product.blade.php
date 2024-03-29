<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Product</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    @vite(['resources/css/product-styles.css','resources/sass/app.scss'])
</head>

<!--  page background -->
<body style="background: rgb(250,250,245);height: 1500px;">
@include('layout.header')
<!-- Breadcrumb -->
<div class="breadcrumb-area" style="background-image:url({{asset('assets/img/product-list-background.png')}});">
    <div class="container">
        <div class="in-breadcrumb">
            <div class="row">
                <div class="col">
                    <h3>Product Details</h3>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Page Conttent -->
<main class="page-content">

    <!-- Product Details Area -->
    <div class="product-details-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-details">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="single-product-details-image">
                                    <img src="{{asset($product['image_path'])}}" alt="">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="product-details-info">
                                    <h4>{{$product['name']}}</h4>

                                    <div class="product-price-rating">

                                        <div class="price-box">
                                            <span class="new-price">£ {{$product['price']}}</span>
                                        </div>
                                        <div class="product-rating">
                                            <ul>
                                                @for($i = 0; $i < floor($product->rating); $i++)
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                @endfor
                                                @for($i = floor($product->rating); $i < 5; $i++)
                                                    <li><i class="zmdi zmdi-star-outline"></i></li>
                                                @endfor
                                            </ul>
                                        </div>
                                    </div>
                                    <p>{{$product['description']}}</p>

                                    <p><strong>Tags: </strong>
                                        @foreach($tags as $tag)
                                            {{$tag['name']}}&nbsp;
                                        @endforeach
                                    </p>


                                    <form method="post" action="{{route("basket.add")}}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$product->id}}">
                                        <div class="product-quantity">
                                            <label for="quantity">Quantity : </label>
                                            <input id="quantity" name="quantity" min="1" max="100" value="1" type="number">
                                        </div>
                                        @if($status = session()->pull("addItem"))
                                            <div class="text-success">
                                                {{$status}}
                                            </div>
                                        @endif

                                        @if($product->stock->quantity <= 0)
                                            <p class="text-danger fs-3">Out of stock</p>
                                            <div class="add-to-cart-btn">
                                                <button type="submit" class="btn btn-primary" disabled>ADD TO CART</button>
                                            </div>
                                        @elseif($product->stock->quantity <= 10)
                                            <p class="text-warning fs-3">Low on stock</p>
                                            <div class="add-to-cart-btn">
                                                <button type="submit" class="btn btn-primary">ADD TO CART</button>
                                            </div>
                                        @else
                                            <div class="add-to-cart-btn">
                                                <button type="submit" class="btn btn-primary">ADD TO CART</button>
                                            </div>
                                        @endif
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="product-description-area section-pt">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="nav description-list" role="tablist">
                                    <li class="active h2">Reviews
                                    </li>
                                </ul>

                                <div class="row m- description-list">
                                    @if(auth()->check() && $hasPurchased && !$canReview)
                                        <h2>You have already submitted a review</h2>
                                    @elseif(auth()->check() && !$hasPurchased)
                                        <h2>Submit a Review</h2>
                                        <p>You must have purchased this product to submit a review</p>
                                    @elseif(!auth()->check())
                                        <h2>Submit a Review</h2>
                                        <p>You must be logged in to submit a review</p>
                                    @elseif(auth()->check() && $hasPurchased && $canReview)
                                    <h2>Submit a Review</h2>
                                    <form method="POST" action="{{route("product.review", [$product->id])}}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="userRating">Rating</label>
                                            <div id="userRating">
                                                <i class="zmdi zmdi-star-outline"></i>
                                                <i class="zmdi zmdi-star-outline"></i>
                                                <i class="zmdi zmdi-star-outline"></i>
                                                <i class="zmdi zmdi-star-outline"></i>
                                                <i class="zmdi zmdi-star-outline"></i>
                                                @error('rating')
                                                    <small class="text-danger">Choose a rating</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="userReview">Review</label>
                                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="userReview" rows="3"></textarea>
                                            @error('description')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <input type="hidden" id="rating" name="rating" value="0">
                                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                        @if($status = session()->pull("review"))
                                            <div class="text-success">
                                                {{$status}}
                                            </div>
                                        @endif
                                    </form>
                                    @endif
                                </div>

                                <div class="row mt-5">
                                <div class="blog-wrapper">
                                    <div class="tab-content">

                                        <div id="description" class="tab-pane active">
                                            @foreach($reviews as $review)
                                                <div class="card mb-3">
                                                    <div class="card-header">
                                                        <h5 class="card-title">{{ $review->user->name }}</h5>
                                                        <div class="rating">
                                                            @for($i = 0; $i < $review->rating; $i++)
                                                                <i class="zmdi zmdi-star"></i>
                                                            @endfor
                                                            @for($i = $review->rating; $i < 5; $i++)
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <p class="card-text">{{ $review->description }}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
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
    // Get all the stars
    let stars = document.querySelectorAll('#userRating .zmdi-star-outline');

    // Get the hidden input field
    let ratingInput = document.querySelector('#rating');

    // Add click event listener to each star
    stars.forEach((star, index) => {
        star.addEventListener('click', () => {
            // Fill all the stars up to and including the clicked star
            for(let i = 0; i <= index; i++) {
                stars[i].classList.add('zmdi-star');
                stars[i].classList.remove('zmdi-star-outline');
            }

            // Unfill the rest of the stars
            for(let i = index + 1; i < stars.length; i++) {
                stars[i].classList.add('zmdi-star-outline');
                stars[i].classList.remove('zmdi-star');
            }

            // Update the value of the hidden input field with the rating
            ratingInput.value = index + 1;
        });
    });
</script>
@include('layout.footer')
</body>
</html>
