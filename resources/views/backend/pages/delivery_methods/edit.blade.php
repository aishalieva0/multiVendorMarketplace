@extends('layouts.backend.master')

@section('content')

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Delivery method Edit</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('delivery_methods.update',$delivery_method->id)}}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" value="{{$delivery_method->title}}" class="form-control"
                                       placeholder="Enter title" id="title">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" value="{{$delivery_method->description}}" class="form-control"
                                       placeholder="Enter description" id="description">
                            </div>

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" name="price" step="0.01" value="{{$delivery_method->price}}" class="form-control"
                                       placeholder="Enter price" id="price">
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
