@extends('layouts.backend.master')

@section('content')

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Banner Edit</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('banners.update', $banners->id)}}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="image">Image</label>
                                <img src="{{asset('banner_images/'. $banners->image) ?? ''}}" width="50" height="50">
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="url">URL</label>
                                <input type="text" name="url" value="{{$banners->url}}" class="form-control"
                                       placeholder="Enter url">
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status">
                                    <option value="0" {{($banners->status == 0) ? 'selected' : ''}}>Passive</option>
                                    <option value="1" {{($banners->status == 1) ? 'selected' : ''}}>Active</option>
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
