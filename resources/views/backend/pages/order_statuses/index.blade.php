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
                            <h3 class="card-title">Order Status</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <div class="input-group-append">
                                        <a href="{{route('order_status.create')}}" class="btn btn-primary float-right">
                                            Create
                                        </a>
                                    </div>
                                </div>
                            </div>
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
                                    <th>Order</th>
                                    <th>Status</th>
                                    <th>Note</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($order_statuses as $order_status)
                                <tr>
                                    <td>{{$order_status->order}}</td>
                                    <td>{{$order_status->status}}</td>
                                    <td>{{$order_status->note}}</td>

                                    <td style="display:flex;column-gap:5px;">
                                        <a href="{{ route('order_status.edit',$order_status->id) }}" title="Edit"
                                           class="btn btn-sm btn-primary pull-right">
                                            Edit
                                        </a>
                                        <form action="{{ route('order_status.destroy',$order_status->id) }}" method="post">
                                        @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger pull-right">Delete</button>

                                        </form>
                                    </td>
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
