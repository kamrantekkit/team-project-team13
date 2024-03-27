@extends('layout.admin_layout_dashboard')



@section('content')
    <h1 class="playportal-page-title">Customer Management</h1>
    <form method="GET" class="d-flex navbar-form ps-5 pe-5 pb-2 pt-2"
          action="{{route("admin.customers-management.search")}}">
        {{@csrf_field()}}
        <div class="input-group">
            <input class="form-control form-control border-black" name="query" type="search"
                   placeholder="Search"/>
            <button class="btn btn-outline-dark" type="submit">Search</button>
        </div>
    </form>
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
                    <a href="{{route('admin.customers-management.editor', $customer['id'])}}" type="button" class="btn btn-primary btn-sm">
                        Edit <i class="fas fa-edit"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row">
        {{ $customers->links('pagination::bootstrap-5') }}
    </div>

@endsection
