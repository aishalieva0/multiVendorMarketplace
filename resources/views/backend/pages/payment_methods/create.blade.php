@extends('layouts.backend.master')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Payment Method Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('payment_methods.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">


                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter name" id="name">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control" placeholder="Enter description" id="description">
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="">Choose status</option>
                                <option value="enabled">Enable</option>
                                <option value="disabled">Disable</option>
                            </select>
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
