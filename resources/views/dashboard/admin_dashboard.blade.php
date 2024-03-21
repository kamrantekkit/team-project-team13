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
    @include('layout.header')
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
                        <a class="nav-link active" href="{{route("admin.dashboard")}}">
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
                        <a class="nav-link" href="{{route('product-creator')}}">
                  <span class="nav-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-file-plus-fill" viewBox="0 0 16 16">
                        <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M8.5 6v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0"/>
                      </svg>
                  </span>
                            <span class="nav-link-text">Add Product</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
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
                        <a class="nav-link" href="{{route('admin.customers-management')}}">
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
    <div class="playportal-wrapper">
      <div class="playportal-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
          <h1 class="playportal-page-title">Overview</h1>
          <div class="row g-4 mb-4">
            <div class="col-6 col-lg-3">
              <div class="playportal-card playportal-card-stat shadow-sm h-100">
                <div class="playportal-card-body p-3 p-lg-4">
                  <h4 class="stats-type mb-1">Total Sales This Week</h4>
                  <div class="stats-figure">£{{$totalRevenue}}</div>
                  <div class="stats-meta text-success">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6 col-lg-3">
              <div class="playportal-card playportal-card-stat shadow-sm h-100">
                <div class="playportal-card-body p-3 p-lg-4">
                  <h4 class="stats-type mb-1">Total Stock Remaining</h4>
                  <div class="stats-figure">{{$stockRemaining}}</div>
                  <div class="stats-meta text-success">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6 col-lg-3">
              <div class="playportal-card playportal-card-stat shadow-sm h-100">
                <div class="playportal-card-body p-3 p-lg-4">
                  <h4 class="stats-type mb-1">Orders to be Processed</h4>
                  <div class="stats-figure">{{$pendingOrders}}</div>
                </div>
                <a class="playportal-card-link-mask" href="#"></a>
              </div>
            </div>
            <div class="col-6 col-lg-3">
              <div class="playportal-card playportal-card-stat shadow-sm h-100">
                <div class="playportal-card-body p-3 p-lg-4">
                  <h4 class="stats-type mb-1">Processed Orders</h4>
                  <div class="stats-figure">{{$completedOrders}}</div>
                </div>
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
                                  <th class="cell">Order ID</th>
                                  <th class="cell">Customer Name</th>
                                  <th class="cell">Customer Email</th>
                                  <th class="cell">Date Ordered</th>
                                  <th class="cell">Status</th>
                                  <th class="cell">Total</th>
                                  <th class="cell">View Order</th>
                                </tr>
                              </thead>
                              <tbody>
                              @foreach($orders as $order)
                                  <tr>
                                      <td class="cell">{{$order['id']}}</td>
                                      <td class="cell">
                                          <span class="truncate">{{$order['name']}}</span>
                                      </td>
                                      <td class="cell">{{$order['email']}}</td>
                                      <td class="cell">
                                          <span class="cell-data">{{$order['order_day']}}</span>
                                          <span class="note">{{$order['order_time']}}</span>
                                      </td>
                                      <td class="cell">
                                          @if($order['status'] == 'pending')
                                              <span class="badge bg-warning">Processing</span>
                                          @elseif($order['status'] == 'completed')
                                              <span class="badge bg-success">Completed</span>
                                          @elseif($order['status'] == 'cancelled')
                                            <span class="badge bg-danger">Cancelled</span>
                                          @endif
                                      </td>
                                      <td class="cell">£{{$order['total']}}</td>
                                      <td class="cell">
                                          <a class="btn-sm app-btn-secondary" href="#">View</a>
                                      </td>
                                  </tr>
                              @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <nav class="playportal-pagination">
                        <ul class="pagination justify-content-center">
                            {{$pages->links('pagination::bootstrap-4')}}
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
