<!-- Content Wrapper. Contains page content -->
@extends('layouts.backend.master')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Orders</h3>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            @if($message= Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Vendor</th>
                                    <th>Delivery method</th>
                                    <th>Payment method</th>
                                    <th>Shipping address</th>
                                    <th>Billing address</th>
                                    <th>Payment status</th>
                                    <th>Subtotal</th>
                                    <th>Shipping fee</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Created</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $orders)
                                <tr>
                                    <td>{{$orders->users->name}}</td>
                                    <td>{{$orders->vendors->name}}</td>
                                    <td>{{$orders->delivery_method_id}}</td>
                                    <td>{{$orders->payment_method}}</td>
                                    <td>{{$orders->shipping_address}}</td>
                                    <td>{{$orders->billing_address}}</td>
                                    <td>{{$orders->payment_status}}</td>
                                    <td>{{$orders->subtotal}}</td>
                                    <td>{{$orders->shipping_fee}}</td>
                                    <td>{{$orders->total}}</td>
                                    <td>{{$orders->status}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div>
    </section>
</div>

@endsection
