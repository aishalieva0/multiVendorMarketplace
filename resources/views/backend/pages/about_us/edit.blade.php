@extends('layouts.backend.master')

@section('content')

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">About Us Edit</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('about_us.update', $about_us->id)}}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="image_1">Image 1</label>
                                <img src="{{asset('about_us_image_1/'. $about_us->image_1) ?? ''}}" width="50" height="50">
                                <input type="file" name="image_1" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="image_2">Image 2</label>
                                <img src="{{asset('about_us_image_2/'. $about_us->image_2) ?? ''}}" width="50" height="50">
                                <input type="file" name="image_2" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="image_3">Image 3</label>
                                <img src="{{asset('about_us_image_3/'. $about_us->image_3) ?? ''}}" width="50" height="50">
                                <input type="file" name="image_3" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="image_4">Image 4</label>
                                <img src="{{asset('about_us_image_4/'. $about_us->image_4) ?? ''}}" width="50" height="50">
                                <input type="file" name="image_4" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" value="{{$about_us->title}}" class="form-control"
                                       placeholder="Enter title">
                            </div>

                            <div class="form-group">
                                <label for="content">Content</label>
                                <input type="text" name="content" value="{{$about_us->content}}" class="form-control"
                                       placeholder="Enter content" id="content">
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
