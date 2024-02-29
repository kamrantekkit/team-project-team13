<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss',"resources/js/app.js"])
</head>
<body>
<nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light" style="background: rgb(34, 34, 34);padding-top: 0;padding-bottom: 10px;height: 89px;">
    <div class="container"><button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><a class="navbar-brand" href="#" style="color: white;font-size: 24px;font-family: 'Roboto', sans-serif;">PlayPortal</a>
        <div id="navcol-1" class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link active" href="index.html" style="color: lightgrey;font-size: 18px;">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.html" style="color: lightgrey;font-size: 18px;">Games</a></li>
                <li class="nav-item dropdown"><a id="navbarDropdown" class="nav-link dropdown-toggle"  data-bs-toggle="dropdown" href="#" role="button" style="color: lightgrey;font-size: 18px;"> Consoles </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(34, 34, 34);">
                        <li><a class="dropdown-item" href="#" style="color: lightgrey;">PlayStation</a></li>
                        <li><a class="dropdown-item" href="#" style="color: lightgrey;">Nintendo</a></li>
                        <li><a class="dropdown-item" href="#" style="color: lightgrey;">Xbox</a></li>
                        <li><a class="dropdown-item" href="#" style="color: lightgrey;">PC</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="faq.html" style="color: lightgrey;font-size: 18px;">Accessories</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.html" style="color: lightgrey;font-size: 18px;">About us</a></li>
            </ul>
            <form class="d-flex navbar-form">
                <div class="input-group"><input class="form-control form-control" type="search" placeholder="Search" /><button class="btn btn-outline-light" type="submit">Search</button></div>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="login.html" style="color: lightgrey;font-size: 18px;">Log In</a></li>
                <li class="nav-item"><a class="btn btn-dark action-button" role="button" href="signup.html" style="color: black;background: white;border-radius: 10px;font-size: 18px;padding: 10px 20px;border: none;transition: background 0.3s;">Sign Up</a></li>
                <li class="nav-item"><button class="btn btn-outline-light ms-2" style="margin-top: 5px;" type="button"><i class="fas fa-shopping-basket"  style="color: white;"></i> Basket </button></li>
            </ul>
        </div>
    </div>
</nav>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <section class="h-100 gradient-custom">
        <div class="container py-5">
          <div class="row d-flex justify-content-center my-4">
            <div class="col-md-8">
              <div class="card mb-4">
                <div class="card-header py-3">
                  <h5 class="mb-0">Cart - 2 items</h5>
                </div>
                <div class="card-body">
                  <!-- Single item -->
                  <div class="row">
                    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                      <!-- Image -->
                      <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                        <img src="https://crepsuk.com/cdn/shop/products/image_480fa0dd-e0cf-49cf-9f7b-adf3e0343c49.jpg?v=1617042748&width=990"
                          class="w-100" alt="Blue Jeans Jacket" />
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                        </a>
                      </div>
                      <!-- Image -->
                    </div>

                    <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                      <!-- Data -->
                      <p><strong>PS5</strong></p>
                      <p>Any Other Data Need To Display</p>
                      <button type="button" class="btn btn-danger btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                        title="Remove item">
                        <i class="fas fa-trash"></i>
                      </button>
                      <!-- Data -->
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                      <!-- Quantity -->
                      <div class="d-flex mb-4" style="max-width: 300px">
                        <button class="btn btn-dark px-3 me-2" style="max-height: 35px;">
                          <i class="fas fa-minus"></i>
                        </button>

                        <div class="form-outline">
                          <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
                          <label class="form-label" for="form1">Quantity</label>
                        </div>

                        <button class="btn btn-dark px-3 ms-2" style="max-height: 35px;">
                          <i class="fas fa-plus"></i>
                        </button>
                      </div>
                      <!-- Quantity -->

                      <!-- Price -->
                      <p class="text-start text-md-center">
                        <strong>£500.00</strong>
                      </p>
                      <!-- Price -->
                    </div>
                  </div>
                  <!-- Single item -->

                  <hr class="my-4" />
<!-- Single item -->
<div class="row">
    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
      <!-- Image -->
      <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
        <img src="https://crepsuk.com/cdn/shop/products/image_480fa0dd-e0cf-49cf-9f7b-adf3e0343c49.jpg?v=1617042748&width=990"
          class="w-100" alt="Blue Jeans Jacket" />
        <a href="#!">
          <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
        </a>
      </div>
      <!-- Image -->
    </div>

    <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
      <!-- Data -->
      <p><strong>PS5</strong></p>
      <p>Any Other Data Need To Display</p>
      <button type="button" class="btn btn-danger btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
        title="Remove item">
        <i class="fas fa-trash"></i>
      </button>
      <!-- Data -->
    </div>

    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
      <!-- Quantity -->
      <div class="d-flex mb-4" style="max-width: 300px">
        <button class="btn btn-dark px-3 me-2" style="max-height: 35px;">
          <i class="fas fa-minus"></i>
        </button>

        <div class="form-outline">
          <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
          <label class="form-label" for="form1">Quantity</label>
        </div>

        <button class="btn btn-dark px-3 ms-2" style="max-height: 35px;">
          <i class="fas fa-plus"></i>
        </button>
      </div>
      <!-- Quantity -->

      <!-- Price -->
      <p class="text-start text-md-center">
        <strong>£500.00</strong>
      </p>
      <!-- Price -->
    </div>
  </div>
  <!-- Single item -->

                </div>
              </div>
              <div class="card mb-4">
                <div class="card-body">
                  <p><strong>Expected shipping delivery</strong></p>
                  <p class="mb-0">12-3-2024 - 14-3-2023</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4">
                <div class="card-header py-3">
                  <h5 class="mb-0">Summary</h5>
                </div>
                <div class="card-body">
                  <ul class="list-group list-group-flush">
                    <li
                      class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                      Products
                      <span>£1000.00</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                      Shipping
                      <span>£30.98</span>
                    </li>
                    <li
                      class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                      <div>
                        <strong>Total amount</strong>
                      </div>
                      <span><strong>£1030.98</strong></span>
                    </li>
                  </ul>

                  <button type="button" class="btn btn-dark btn-lg btn-block">
                    Go to checkout
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

</body>

</html>