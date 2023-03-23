@extends('layouts.backend.master')

@section('content')

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Slider Edit</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('sliders.update', $sliders->id)}}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" value="{{$sliders->title}}" class="form-control"
                                       placeholder="Enter title">
                            </div>

                            <div class="form-group">
                                <label for="subtitle">Subtitle</label>
                                <input type="text" name="Subtitlet" value="{{$sliders->subtitle}}" class="form-control"
                                       placeholder="Enter subtitle">
                            </div>

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" name="price" value="{{$sliders->price}}" class="form-control"
                                       placeholder="Enter price">
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <img src="{{asset('slider_images/'. $sliders->image) ?? ''}}" width="50" height="50">
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="button">Button</label>
                                <input type="text" name="button" value="{{$sliders->button}}" class="form-control"
                                       placeholder="Enter button">
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status">
                                    <option value="0" {{($sliders->status == 0) ? 'selected' : ''}}>Passive</option>
                                    <option value="1" {{($sliders->status == 1) ? 'selected' : ''}}>Active</option>
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
