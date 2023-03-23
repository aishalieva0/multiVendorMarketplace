@extends('layouts.backend.master')

@section('content')

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Image Edit</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('images.update', $images->id)}}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="path">Path</label>
                                <input type="text" name="path" value="{{$images->path}}" class="form-control"
                                       placeholder="Enter path">
                            </div>

                            <div class="form-group">
                                <label for="main">Main</label>
                                <input type="text" name="main" value="{{$images->main}}" class="form-control"
                                       placeholder="Enter main">
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
