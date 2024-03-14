<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/css/admin_dashboard.css'])
</head>
<body class="app">
    <header>
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
      <div class="playportal-header-inner">
        <div class="container-fluid py-2">
          <div class="playportal-header-content">
            <div class="row justify-content-between align-items-center">
              <div class="col-auto">
                <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img">
                    <title>Menu</title>
                    <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
                  </svg>
                </a>
              </div>
              <div class="search-mobile-trigger d-sm-none col">
                <i class="search-mobile-trigger-icon fa-solid fa-magnifying-glass"></i>
              </div>
              <div class="playportal-search-box col">
                <form class="playportal-search-form">
                  <input type="text" placeholder="Search Here..." name="search" class="form-control search-input">
                  <button type="submit" class="btn search-btn btn-primary" value="Search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="playportal-sidepanel" class="playportal-sidepanel">
        <div id="sidepanel-drop" class="sidepanel-drop"></div>
        <div class="sidepanel-inner d-flex flex-column">
          <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
          <nav id="playportal-nav-main" class="playportal-nav playportal-nav-main flex-grow-1">
            <ul class="playportal-menu list-unstyled accordion" id="menu-accordion">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span class="nav-icon">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z" />
                      <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                    </svg>
                  </span>
                  <span class="nav-link-text">Admin Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="nav-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-file-plus-fill" viewBox="0 0 16 16">
                        <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M8.5 6v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0"/>
                      </svg>
                  </span>
                  <span class="nav-link-text">Add Product</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="nav-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                        <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z"/>
                      </svg>
                  </span>
                  <span class="nav-link-text">Stock Management</span>
                </a>
              </li>
              <li class="nav-item">
                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                <a class="nav-link" href="charts.html">
                  <span class="nav-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                      </svg>
                  </span>
                  <span class="nav-link-text">Customers</span>
                </a>
                <!--//nav-link-->
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <div class="playportal-wrapper">

      <div class="playportal-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
          <h1 class="playportal-page-title">Overview</h1>
          <div class="row g-4 mb-4">
            <div class="col-6 col-lg-3">
              <div class="playportal-card playportal-card-stat shadow-sm h-100">
                <div class="playportal-card-body p-3 p-lg-4">
                  <h4 class="stats-type mb-1">Total Sales</h4>
                  <div class="stats-figure">£7,500</div>
                  <div class="stats-meta text-success">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
                    </svg> 7%
                  </div>
                </div>
                <a class="playportal-card-link-mask" href="#"></a>
              </div>
            </div>
            <div class="col-6 col-lg-3">
              <div class="playportal-card playportal-card-stat shadow-sm h-100">
                <div class="playportal-card-body p-3 p-lg-4">
                  <h4 class="stats-type mb-1">New Customers</h4>
                  <div class="stats-figure">£3,140</div>
                  <div class="stats-meta text-success">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z" />
                    </svg> 2%
                  </div>
                </div>
                <a class="playportal-card-link-mask" href="#"></a>
              </div>
            </div>
            <div class="col-6 col-lg-3">
              <div class="playportal-card playportal-card-stat shadow-sm h-100">
                <div class="playportal-card-body p-3 p-lg-4">
                  <h4 class="stats-type mb-1">Games in Stock</h4>
                  <div class="stats-figure">60</div>
                </div>
                <a class="playportal-card-link-mask" href="#"></a>
              </div>
            </div>
            <div class="col-6 col-lg-3">
              <div class="playportal-card playportal-card-stat shadow-sm h-100">
                <div class="playportal-card-body p-3 p-lg-4">
                  <h4 class="stats-type mb-1">Invoices</h4>
                  <div class="stats-figure">12</div>
                  <div class="stats-meta">New</div>
                </div>
                <a class="playportal-card-link-mask" href="#"></a>
              </div>
            </div>
          </div>
          <div class="row g-4 mb-4">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="tab-content" id="orders-table-tab-content">
                    <div class="tab-pane fade active show" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                      <div class="playportal-card playportal-card-orders-table shadow-sm mb-5">
                        <div class="playportal-card-body">
                          <div class="table-responsive">
                            <table class="table app-table-hover mb-0 text-left">
                              <thead>
                                <tr>
                                  <th class="cell">Order</th>
                                  <th class="cell">Product</th>
                                  <th class="cell">Customer</th>
                                  <th class="cell">Date</th>
                                  <th class="cell">Status</th>
                                  <th class="cell">Total</th>
                                  <th class="cell"></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="cell">#768</td>
                                  <td class="cell">
                                    <span class="truncate">Spider-man 2</span>
                                  </td>
                                  <td class="cell">Jack</td>
                                  <td class="cell">
                                    <span class="cell-data">12 Mar</span>
                                    <span class="note">12:01 PM</span>
                                  </td>
                                  <td class="cell">
                                    <span class="badge bg-danger">Cancelled</span>
                                  </td>
                                  <td class="cell">£16.00</td>
                                  <td class="cell">
                                    <a class="btn-sm app-btn-secondary" href="#">View</a>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="cell">#8709</td>
                                  <td class="cell">
                                    <span class="truncate">Call of Duty</span>
                                  </td>
                                  <td class="cell">Karl Drogo</td>
                                  <td class="cell">
                                    <span class="cell-data">11 Nov</span>
                                    <span class="note">11:28 PM</span>
                                  </td>
                                  <td class="cell">
                                    <span class="badge bg-success">Paid</span>
                                  </td>
                                  <td class="cell">£12.26</td>
                                  <td class="cell">
                                    <a class="btn-sm app-btn-secondary" href="#">View</a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <nav class="playportal-pagination">
                        <ul class="pagination justify-content-center">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                          </li>
                          <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">2</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">3</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
