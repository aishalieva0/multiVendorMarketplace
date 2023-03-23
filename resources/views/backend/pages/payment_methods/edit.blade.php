@extends('layouts.backend.master')

@section('content')

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Payment method Edit</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('payment_methods.update',$payment_method->id)}}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{$payment_method->name}}" class="form-control"
                                       placeholder="Enter name" id="name">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" value="{{$payment_method->description}}" class="form-control"
                                       placeholder="Enter description" id="description">
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status">
                                    <option value="disabled" {{($payment_method->status == 'disabled') ? 'selected' : ''}}>Disable</option>
                                    <option value="enabled" {{($payment_method->status == 'enabled') ? 'selected' : ''}}>Enable</option>
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
