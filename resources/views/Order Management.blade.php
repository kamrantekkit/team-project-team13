<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>TP_version_1</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets/css/Black-Navbar.css">
    <link rel="stylesheet" href="assets/css/Navbar---Apple-navbar---apple.css">
    <link rel="stylesheet" href="assets/css/Navbar---Apple.css">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-Dark-icons.css">
</head>

<body style="background: rgb(255,183,253);">
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
    </nav><div class="order-management-container">
    <div class="search-bar">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="searchInput" oninput="filterOrders()">
    </div>

    <div class="filter-buttons">
        <button class="btn btn-primary" onclick="filterOrders('all')">All Orders</button>
        <button class="btn btn-success" onclick="filterOrders('shipped')">Shipped</button>
        <button class="btn btn-info" onclick="filterOrders('delivered')">Delivered</button>
        <button class="btn btn-warning" onclick="filterOrders('pending')">Pending</button>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Customer Name</th>
                    <th>Order No</th>
                    <th>Price</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="orderTableBody">
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    const orders = [
        { customer: 'John Doe', orderNo: '#18749', price: '£55.00', date: '2023-02-24', status: 'shipped' },
 { customer: 'Jimmy Rich', orderNo: '#04589', price: '£79.99', date: '2023-06-16', status: 'delivered' },
        // Add more orders here
    ];

    function filterOrders(status) {
        const searchInput = document.getElementById('searchInput').value.toLowerCase();
        const filteredOrders = orders.filter(order => 
            (status === 'all' || order.status === status) &&
            (searchInput === '' || order.customer.toLowerCase().includes(searchInput))
        );

        displayOrders(filteredOrders);
    }

    function displayOrders(orders) {
        const tableBody = document.getElementById('orderTableBody');
        tableBody.innerHTML = '';

        orders.forEach(order => {
            const row = `<tr>
                            <td>${order.customer}</td>
                            <td>${order.orderNo}</td>
                            <td>${order.price}</td>
                            <td>${order.date}</td>
                            <td><span class="badge bg-info">${capitalizeFirstLetter(order.status)}</span></td>
                        </tr>`;
            tableBody.innerHTML += row;
        });
    }

    function capitalizeFirstLetter(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

    filterOrders('all');
</script>


    <section></section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Navbar---Apple-navbar---apple.js"></script>
</body>

</html>