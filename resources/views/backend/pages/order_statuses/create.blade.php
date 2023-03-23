@extends('layouts.backend.master')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Order Status Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('order_status.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

{{--                        <div class="form-group">--}}
{{--                            <label for="title">Order</label>--}}
{{--                            <select>--}}
{{--                                @foreach($orders as $order)--}}
{{--                                    <option></option>--}}
{{--                                    <option></option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}


                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" name="status" class="form-control" placeholder="Enter status">
                        </div>

                        <div class="form-group">
                            <label for="note">Note</label>
                            <input type="text" name="note" class="form-control" placeholder="Enter note">
                        </div>
                    </div>

                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </section>
</div>
@endsection
