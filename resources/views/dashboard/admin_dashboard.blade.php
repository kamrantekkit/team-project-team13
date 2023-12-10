<!doctype html>
<html lang="en">

@include("layout.header")
<body style="background: rgb(255, 183, 253)">

@include("layout.navbar")
<div class="wrapper" style="display: flex; width: 100%;">
        <nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light" style="background: rgb(34, 34, 34);flex-direction: column; width: 10%; height: 100vh;">
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background: rgb(34, 34, 34);flex-direction: column;">
                <ul class="navbar-nav mr-auto" style="background: rgb(34, 34, 34);flex-direction: column;">
                    <li class="nav-item active">
                        <a class="nav-link" href="products page.html"><button type="button" class="btn btn-light custom-btn" style="size: 50px;">Add<br>Product</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><button type="button" class="btn btn-light custom-btn">Stock<br>Management</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><button type="button" class="btn btn-light custom-btn">Customers</button></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content">
            <h2 class="title">Admin Dashboard</h2>
            <div class="blocks">
                <div class="box"><h4>Stock<br>&nbsp;&nbsp;&nbsp;0%</h4></div>
                <div class="box"><h4>Total Orders<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0</h4></div>
                <div class="box"><h4>Total Revenue<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;£0</h4></div>
            </div>
                 <div class="bigbox">
                 <h3>All Orders</h3>
                 <ul>
                    <li>Order NO.</li>
                    <li>Customer Name</li>
                    <li>Customer Email</li>
                    <li>Subtotal</li>
                    <li>Order Status</li>
                    <li>Date</li>
                 </ul>
                 <div class="order">
                    <ul>
                        <li>256</li>
                        <li>Zero Anonymous</li>
                        <li>zeroanonymous272@gmail.com</li>
                        <li>£1000</li>
                        <li>Pending</li>
                        <li>12-04-2023</li>
                    </ul>
                    <ul>
                        <li>277</li>
                        <li>One Anonymous</li>
                        <li>oneanonymous889@gmail.com</li>
                        <li>£120</li>
                        <li>Cancelled</li>
                        <li>23-05-2023</li>
                    </ul>
                </div>
            </div>
            </div>
</div>

</body>
</html>
