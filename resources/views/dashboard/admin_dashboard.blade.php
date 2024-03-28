@extends('layout.admin_layout_dashboard')


@section('content')
    <h1 class="playportal-page-title">Overview</h1>
    <div class="row g-4 mb-4">
        <div class="col-6 col-lg-3">
            <div class="playportal-card playportal-card-stat shadow-sm h-100">
                <div class="playportal-card-body p-3 p-lg-4">
                    <h4 class="stats-type mb-1">Total Sales This Week</h4>
                    <div class="stats-figure">£{{number_format($totalRevenue / 100, 2)}}</div>
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
        <div class="col-12">
            <div class="playportal-card shadow-sm">
                <div class="playportal-card-body m-2 ">
                    <h4 class="mb-3">Export Reports</h4>
                    <form method="POST" action="{{ route('admin.reports.export') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="start_date" class="form-label">Start Date</label>
                                    <input type="date" class="form-control @error('start_date') is-invalid @enderror" id="start_date" name="start_date" required>
                                    @error('start_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="end_date" class="form-label">End Date</label>
                                    <input type="date" class="form-control @error('end_date') is-invalid @enderror" id="end_date" name="end_date" required>
                                    @error('end_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Export</button>
                    </form>
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
                                                    <span class="badge bg-warning">Requires Processing</span>
                                                @elseif($order['status'] == 'completed')
                                                    <span class="badge bg-success">Completed</span>
                                                @elseif($order['status'] == 'cancelled')
                                                    <span class="badge bg-danger">Cancelled</span>
                                                @endif
                                            </td>
                                            <td class="cell">£{{$order['total']}}</td>
                                            <td class="cell">
                                                <a class="btn-sm app-btn-secondary" href="{{route('admin.orders.view',["id" => $order['id']])}}">View</a>
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
@endsection
