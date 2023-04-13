@extends('layouts.backend.master')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">About Us Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('about_us.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label for="image_1">Image 1</label>
                            <input type="file" name="image_1" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label for="image_2">Image 2</label>
                            <input type="file" name="image_2" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label for="image_3">Image 3</label>
                            <input type="file" name="image_3" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label for="image_4">Image 4</label>
                            <input type="file" name="image_4" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter title">
                        </div>

                        <div class="form-group">
                            <label for="content">Content</label>
                            <input type="text" name="content" class="form-control" placeholder="Enter content">
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
