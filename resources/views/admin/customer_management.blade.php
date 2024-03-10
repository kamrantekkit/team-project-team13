<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>customer-management-page</title>
    @vite(['resources/js/app.js','resources/sass/app.scss'])
</head>
<!-- navbar thats used consistently  for all pages of our website -->
<body class="h-100 min-vh-100 d-flex flex-column">
<div class="container-fluid" style="background: rgb(34,34,34);">
    <nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light"
         style="background: rgb(34, 34, 34);padding-top: 0;padding-bottom: 10px;height: 89px;">
        <div class="container">
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1"><span
                    class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <a class="navbar-brand" href="#" style="color: white;font-size: 24px;font-family: 'Roboto', sans-serif;">PlayPortal</a>
            <div id="navcol-1" class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.html"
                                            style="color: lightgrey;font-size: 18px;">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html"
                                            style="color: lightgrey;font-size: 18px;">Games</a></li>
                    <li class="nav-item dropdown"><a id="navbarDropdown" class="nav-link dropdown-toggle"
                                                     data-bs-toggle="dropdown" href="#" role="button"
                                                     style="color: lightgrey;font-size: 18px;"> Consoles </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown"
                            style="background-color: rgb(34, 34, 34);">
                            <li><a class="dropdown-item" href="#" style="color: lightgrey;">PlayStation</a></li>
                            <li><a class="dropdown-item" href="#" style="color: lightgrey;">Nintendo</a></li>
                            <li><a class="dropdown-item" href="#" style="color: lightgrey;">Xbox</a></li>
                            <li><a class="dropdown-item" href="#" style="color: lightgrey;">PC</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="faq.html" style="color: lightgrey;font-size: 18px;">Accessories</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.html"
                                            style="color: lightgrey;font-size: 18px;">About us</a></li>
                </ul>
                <form class="d-flex navbar-form">
                    <div class="input-group"><input class="form-control form-control" type="search"
                                                    placeholder="Search"/>
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </div>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="login.html"
                                            style="color: lightgrey;font-size: 18px;">Log In</a></li>
                    <li class="nav-item"><a class="btn btn-primary action-button" role="button" href="signup.html"
                                            style="color: black;background: white;border-radius: 10px;font-size: 18px;padding: 10px 20px;border: none;transition: background 0.3s;">Sign
                            Up</a></li>
                    <li class="nav-item">
                        <button class="btn btn-outline-light ms-2" style="margin-top: 5px;" type="button"><i
                                class="fas fa-shopping-basket" style="color: white;"></i> Basket
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- customer management section -->
<!-- basic card that organises ID, Name, Phone , Email and an action button into a table-->
<div class="container-fluid flex-grow-1" style="background: #007BFF;">
    <div class="row h-100">
        <div class="row p-2 ">
            <div class="col-md-12">
                <div class="card rounded" style="background-color:white;color:black;border-radius:15px;">
                    <div class="card-body">
                        <form method="GET" class="d-flex navbar-form ps-5 pe-5 pb-2 pt-2" action="{{route("admin.customers-management.search")}}">
                            {{@csrf_field()}}
                            <div class="input-group">
                                <input class="form-control form-control border-black" name="query" type="search"
                                                            placeholder="Search"/>
                                <button class="btn btn-outline-dark" type="submit">Search</button>
                            </div>
                        </form>
                        <h3 class="card-title" style="color:black;">Customer Management</h3>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customers as $customer)
                            <tr>
                                <th scope="row">{{$customer['id']}}</th>
                                <td>{{$customer['name']}}</td>
                                <td>{{$customer['phone']}}</td>
                                <td>{{$customer['email']}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm">
                                        Edit <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            {{ $customers->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="color: rgb(34,34,34);background: rgb(34,34,34);">
    <div style="height:89px;color:var(--bs-body-color);background:var(--bs-body-color);"></div>
</div>

</body>

</html>
