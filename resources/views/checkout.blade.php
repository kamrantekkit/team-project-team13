





<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Checkout</title>
    {{-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets/css/Black-Navbar.css">
    <link rel="stylesheet" href="assets/css/Navbar---Apple-navbar---apple.css">
    <link rel="stylesheet" href="assets/css/Navbar---Apple.css">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-Dark-icons.css"> --}}
    @vite(['resources/sass/app.scss'])
</head>

<body style="">
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light" style="background: rgb(34, 34, 34);border-radius: 20;border-top-left-radius: 20;border-top-right-radius: 20;border-bottom-right-radius: 20;border-bottom-left-radius: 20;padding-top: 0;padding-bottom: 10px;">
        <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div><a class="navbar-brand" href="#"><span>PlayPortal</span> </a></div>
            <div class="collapse navbar-collapse" id="navcol-1" style="color: rgb(255,255,255);">
                <ul class="navbar-nav nav-right">
                    <li class="nav-item"><a class="nav-link active" href="index.html" style="color: rgba(224,217,217,0.9);">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html" style="color: rgba(224,217,217,0.9);">Games</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color: rgb(224,217,217,0.9);">Consoles</a></li>
                    <li class="nav-item"><a class="nav-link" href="faq.html" style="color: rgba(224,217,217,0.9);">Accessories</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html" style="color: rgba(224,217,217,0.9);">About us&nbsp;</a></li>
                </ul>
                <p class="ms-auto navbar-text actions" style="text-align: right;"><a class="login" href="login.html" style="color: rgba(224,217,217,0.9);">Log In</a> <a class="btn btn-light action-button" role="button" href="signup.html" style="color: rgba(0,0,0,0.9);background: var(--bs-gray-200);border-radius: 10px;border-style: solid;border-color: rgba(0,0,0,0.9);font-size: 16px;padding: 5px 8px;">Sign Up</a></p>
            </div>
        </div>
    </nav>
    <div style="height: 500px;border-color: var(--bs-body-bg);">
        <div class="container py-4 py-xl-5">
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-12 mt-2">
                    <div class="card">
                        <div class="card-body">

                                <h5 class="card-title" style="text-align: center">Contact Details</h5>
                                <h6>We Will use this details </h6>
                                <input type="text" placeholder="Title*" class="form-control mt-3"/>
                                <div style="display: flex;">
                                    <input type="text" placeholder="First Name*" class="form-control mt-3" style="margin-right: 5px;"/>
                                    <input type="text" placeholder="Last Name*" class="form-control mt-3"/>
                                </div>
                                <input type="email" placeholder="Email*" class="form-control mt-3"/>
                                <input type="text" placeholder="Mobile Number*" class="form-control mt-3"/>

                                <h6 class="mt-4" style="border-bottom: solid;border-width: 1px;">Billing Address</h6>
                                <div style="display: flex">
                                    <input type="text" placeholder="First Name" class="form-control mt-3" style="margin-right: 5px;"/>
                                    <input type="text" placeholder="Last Name" class="form-control mt-3"/>
                                </div>

                                <input type="text" placeholder="Country / Region*" class="form-control mt-3"/>
                                <input type="text" placeholder="Street address" class="form-control mt-3"/>
                                <input type="text" placeholder="town / city" class="form-control mt-3"/>
                                <input type="text" placeholder="pastcode" class="form-control mt-3"/>




                                <h6 class="mt-4" style="border-bottom: solid;border-width: 1px;">Payment Detalis</h6>
                                <div style="display: flex;">
                                    <input type="text" placeholder="Credit Card Number*" class="form-control mt-3" style="width: 75%;margin-right: 5px;"/>
                                <input type="text" placeholder="security code*" class="form-control mt-3" style="width: 25%"/>
                                </div>

                                <input type="month" placeholder="Card Expiration*" class="form-control mt-3"/>



                                <div class="mt-3" style="display: flex;justify-content: space-around;flex-wrap: wrap; ">
                                    <button class="btn btn-primary mt-1">Save and Proceed</button>
                                </div>



                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-12 mt-2">
                    <div class="card">
                        <div class="card-body" style="min-le">
                            <div style="display: flex;justify-content: space-between; border-bottom: solid;
                            border-width: 1px;
                            padding-bottom: 5px;">
                                <div>
                                    <h6>Your basket contains 2 items</h6>
                                    <a href="#">Edit</a>
                                </div>

                                <span style="font-weight: 700;
                                font-size: 11px;">69.99$</span>
                            </div>

                            <div class="card mb-3 mt-3" style="max-width: 540px;">
                                <div class="row no-gutters">
                                  <div class="col-md-2" style="    display: flex;
                                  align-content: center;
                                  justify-content: space-between;
                                  align-items: center;">
                                    <img style="margin-left: 10px;" src="https://m.media-amazon.com/images/I/81qBiCSoegL._AC_UF894,1000_QL80_.jpg" class="card-img" alt="item image">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h6 class="card-title" style="font-weight: 600">Marvel</h5>
                                        <div style="display: flex;justify-content: space-between;    border-bottom: solid;
                                        border-width: 1px;">
                                            <p class="card-text">new</p>
                                            <p style="font-size: 12px;
                                            font-weight: 600;">96.99$</p>
                                        </div>
                                      <p class="card-text"><small class="text-muted">QTY: 1</small></p>
                                    </div>
                                  </div>
                                </div>
                              </div>


                              <div class="card mb-3 mt-3" style="max-width: 540px;">
                                <div class="row no-gutters">
                                  <div class="col-md-2" style="    display: flex;
                                  align-content: center;
                                  justify-content: space-between;
                                  align-items: center;">
                                    <img style="margin-left: 10px;" src="https://m.media-amazon.com/images/I/81qBiCSoegL._AC_UF894,1000_QL80_.jpg" class="card-img" alt="item image">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h6 class="card-title" style="font-weight: 600">Marvel</h5>
                                        <div style="display: flex;justify-content: space-between;    border-bottom: solid;
                                        border-width: 1px;">
                                            <p class="card-text">new</p>
                                            <p style="font-size: 12px;
                                            font-weight: 600;">96.99$</p>
                                        </div>
                                      <p class="card-text"><small class="text-muted">QTY: 1</small></p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <div style="border-bottom: solid;border-width: 1px;">
                                <div style="display: flex;justify-content: space-between">
                                    <span class="text-muted">Order Sub-Total</span>
                                    <span class="text-muted">888$</span>
                                </div>
                                <div style="display: flex;justify-content: space-between">
                                    <span class="text-muted">Delivery Charges</span>
                                    <span class="text-muted">888$</span>
                                </div>
                                <div style="display: flex;justify-content: space-between">
                                    <span class="text-muted">Discount</span>
                                    <span class="text-muted">888$</span>
                                </div>
                            </div>
                            <div style="display: flex;justify-content: space-between" class="mt-2">
                                <span style="font-weight: 600">Order Total</span>
                                <span style="font-weight: 600">888$</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <section>
    </section>
    {{-- <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Navbar---Apple-navbar---apple.js"></script> --}}
</body>

</html>
