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
    @include('layout.header')
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
