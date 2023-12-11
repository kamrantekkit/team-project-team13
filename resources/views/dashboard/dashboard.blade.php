<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

@include("layout.header")
<body style="height: 1200px;background: rgb(255,183,253);">

<!--  Navbar section -->
@include("layout.navbar")

<!-- Left container that showcases customer dashboard -->
<div class="container-fluid" style="height:480px;background:rgb(255,183,253);">
    <div class="row h-100"><div class="container-fluid" style="background:rgb(255,183,253);height:480px; margin-top: 40px;">
            <div class="row h-100">

                <div class="col-md-6 d-flex justify-content-start align-items-center">

                    <div class="card rounded" style="width:18rem;min-height:450px;background-color:white;color:black;border-radius:15px;">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title mb-3" style="color:black;">Hi, {{auth()->user()->name}}</h5>
                            <a class="btn btn-dark my-2" role="button" href="{{route('dashboard')}}" style="height:38px;">Your Orders</a>
                            <a class="btn btn-dark my-2" role="button" href="#" style="height:38px;">Favorites</a>
                            <a class="btn btn-dark my-2" role="button" href="{{route('dashboard.settings')}}" style="height:38px;">My Profile</a>
                            <a class="btn btn-dark my-2" role="button" href="#" style="height:38px;">Payment Details</a>
                            <a class="btn btn-dark my-2" role="button" href="#" style="height:38px;">Alerts</a>
                            @if(auth()->user()->is_admin)
                                <a class="btn btn-dark my-2" role="button" href="{{route('admin.dashboard')}}" style="height:38px;">Go To Admin Board</a>
                            @endif
                            <a class="btn btn-dark my-2" role="button" style="height:38px;" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sign Out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Right side column for recent orders  -->
                <div class="col-md-6 col-sm-12" style="margin-top: -458px; margin-left: 460px; margin-bottom: 100px;">
                    <div class="d-flex card justify-content-between align-items-center border-bottom pb-2">
                        <h6 class="mb-0">Previous Orders</h6>
                    </div>
                    @foreach($orders as $order)
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center border-bottom pb-2">
                                <h6 class="mb-0"></h6>
                                <span class="fw-bold fs-6">Order #{{$order['id']}}</span>
                            </div>
                            <!-- Details of order 1-->
                            @foreach($order['products'] as $product)
                            <div class="row align-items-center my-3">
                                <div class="col-3">
                                    <img src="{{asset($product['image_path'])}}" class="img-fluid" alt="item image">
                                </div>
                                <div class="col-9">
                                    <div class="d-flex justify-content-between align-items-center border-bottom pb-1">
                                        <h6 class="mb-0 fw-bold">{{$product['name']}}</h6>
                                        <span class="fs-6 fw-bold">{{$product['price']}}</span>
                                    </div>
                                    <p class="mb-1">{{$product['description']}}</p>
                                    <small class="text-muted">QTY: {{$product['quantity']}}</small>
                                </div>
                            </div>
                            @endforeach

                            <!-- Order placement date -->
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="fw-normal">Order Placed: {{$order['date']}}</span>
                                <span class="fw-bold"></span>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid"
     style="margin-bottom: 0px; margin-top: 542px; background: var(--bs-body-color); color: var(--bs-body-color); padding: 0; margin-left: 0; margin-right: 0; position: absolute; left: 0; right: 0;">
    <div style="background: var(--bs-body-color); color: var(--bs-body-color); height: 89px;"></div>
</div>


</body>

</html>
