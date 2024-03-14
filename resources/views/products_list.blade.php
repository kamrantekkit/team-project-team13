<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/css/product-styles.css','resources/sass/app.scss','resources/img/background.png'])

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
                  <li class="nav-item"><a class="btn btn-primary action-button" role="button" href="signup.html" style="color: black;background: white;border-radius: 10px;font-size: 18px;padding: 10px 20px;border: none;transition: background 0.3s;">Sign Up</a></li>
                  <li class="nav-item"><button class="btn btn-outline-light ms-2" style="margin-top: 5px;" type="button"><i class="fas fa-shopping-basket"  style="color: white;"></i> Basket </button></li>
              </ul>
          </div>
      </div>
  </nav>
    <div class="breadcrumb-area" style="background-image:url('resources/img/background.png');">
        <div class="container">
            <div class="in-breadcrumb">
                <div class="row">
                    <div class="col">
                        <h3>Games</h3>
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href='#'>Home</a></li>
                            <li class="breadcrumb-item active">Games</li>
                        </ul>
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
                                <div class="single-widget widget-search">
                                    <form action="#" class="widget-search-form">
                                        <input type="text" placeholder="Search...">
                                        <button type="submit"><i class="bi bi-search"></i></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-widget widget-categories">
                                    <h4 class="widget-title">
                                        <span>Tags</span>
                                    </h4>
                                    <div class="tag">
                                        <a href="#">Accessories</a>
                                        <a href="#">Action</a>
                                        <a href="#">Adventure</a>
                                        <a href="#">Battle Royale</a>
                                        <a href="#">Co-op</a>
                                        <a href="#">Fighting</a>
                                        <a href="#">Horror</a>
                                        <a href="#">First-Person Shooter (FPS)</a>
                                        <a href="#">Massively Multiplayer Online (MMO)</a>
                                        <a href="#">MOBA</a>
                                        <a href="#">Music/Rhythm</a>
                                        <a href="#">Multiplayer</a>
                                        <a href="#">Open World</a>
                                        <a href="#">Puzzle</a>
                                        <a href="#">Racing</a>
                                        <a href="#">Role-Playing Game(RPG)</a>
                                        <a href="#">Singleplayer</a>
                                        <a href="#">Simulation</a>
                                        <a href="#">Strategy</a>
                                        <a href="#">Sports</a>
                                        <a href="#">Survival</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-widget widget-categories">
                                    <h4 class="widget-title">
                                        <span> Price Range</span>
                                    </h4>
                                    <ul>
                                        <li>
                                            <div class="checkout-box-wrap">
                                                <label>
                                                    <input type="checkbox" id="chekout-box"> £0 - £19.99
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkout-box-wrap">
                                                <label>
                                                    <input type="checkbox" id="chekout-box"> £20 - £39.99
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkout-box-wrap">
                                                <label>
                                                    <input type="checkbox" id="chekout-box"> £40 - 59.99£
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkout-box-wrap">
                                                <label>
                                                    <input type="checkbox" id="chekout-box"> £60 - £99.99
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkout-box-wrap">
                                                <label>
                                                    <input type="checkbox" id="chekout-box"> £100 - £149.99
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkout-box-wrap">
                                                <label>
                                                    <input type="checkbox" id="chekout-box"> £150 - £199.99
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkout-box-wrap">
                                                <label>
                                                    <input type="checkbox" id="chekout-box"> £200+
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>       
                            
                            
                        </div>
                        
                    </div>        
    </main>
</body>
</html>