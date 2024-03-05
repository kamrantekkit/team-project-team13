<!DOCTYPE html>
@include("layout.header")
<!--  game background -->
<body style="background: rgb(255,183,253); height: 1500px;">
<!--  Navbar section -->
@include("layout.navbar")
<!-- Content Section -->
<div style="height: 0px;background: rgb(34,34,34);">
    <div style="background: #ffffff;margin-bottom: 100px;margin-top: 400px;color: rgb(255,183,253);">
        <div class="container" style="min-height: 400px;">
            <div class="row justify-content-center">
                <!-- Nintendo button and images-->
                <div class="col-md-4 text-center" style="margin-top: 30px;">
                    <a href="{{route('products.category',['Nintendo'])}}" class="btn mb-4" style="width: 70%; background-color: #D90011; color: #ffffff;">Nintendo
                    </a>
                    <img class="img-fluid" src="{{asset("assets/img/Screenshot%202023-11-22%20013112.png")}}" alt="Nintendo img"/>
                </div>
                <!-- Xbox button and images -->
                <div class="col-md-4 text-center" style="margin-top: 30px;">
                    <a href="{{route('products.category',['Xbox'])}}" class="btn mb-4" style="width: 70%; background-color: #127D10; color: #ffffff;">Xbox
                    </a>
                    <img class="img-fluid" src="{{asset("assets/img/Screenshot%202023-11-22%20025302.png")}}" alt="Xbox img"/>
                </div>
                <!-- Playstation button and images -->
                <div class="col-md-4 text-center" style="margin-top: 30px;">
                    <a {{route('products.category',['Playstation'])}} class="btn mb-4" style="width: 70%; background-color: #024EA2; color: #ffffff;">
                        Playstation
                    </a>
                    <img class="img-fluid" src="{{asset("assets/img/Screenshot%202023-11-22%20025327.png")}}" alt="Playstation img"/>
                </div>
                <!-- PC button and images -->
                <div class="col-md-4 text-center" style="margin-top: 30px;">
                    <a href="{{route('products.category',['PC'])}}" class="btn mb-4" style="width: 70%; background-color: #225B7C; color: #ffffff;">PC</a>
                    <img class="img-fluid" src="{{asset("assets/img/Screenshot%202023-11-22%20031453.png")}}" style="width: 300px;"
                         alt="PC img"/>
                </div>
            </div>
        </div>
        <!-- Accessories button and 3 images -->
        <div></div>
        <div class="container-fluid text-center"
             style="height: 250px; background: var(--bs-secondary-border-subtle); margin-top: 50px;">
            <div class="row justify-content-evenly align-items-center h-100">
                <div class="col-md-3 mt-4">
                    <a href="{{route('products.category',['Accessories'])}}" class="btn btn-primary w-100 mb-3"
                       style="margin-top: -170px; background-color: #000; border: none;">Accessories</a>
                </div>
            </div>
            <div class="row justify-content-evenly align-items-center h-100">
                <div class="col-md-3 mb-3" style="margin-top: -420px;">
                    <img src="{{asset("assets/img/Screenshot%202023-11-27%20231603.png")}}" style="width: 175px;"/>
                </div>
                <div class="col-md-3 mb-3" style="margin-top: -420px;">
                    <img src="{{asset("assets/img/Screenshot%202023-11-27%20231542.png")}}" style="width: 175px;"/>
                </div>
                <div class="col-md-3 mb-3" style="margin-top: -420px;">
                    <img src="{{asset("assets/img/Screenshot%202023-11-27%20214411.png")}}" style="width: 175px;"/>
                </div>
            </div>
        </div>

        <div style="background: rgb(34, 34, 34);height: 68.3333px;margin-top: 230px;"></div>
    </div>
</div>
</body>

</html>
