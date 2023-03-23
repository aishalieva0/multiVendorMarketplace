@extends('layouts.backend.master')

@section('content')

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Setting Edit</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('settings.update', $settings->id)}}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="key">Key</label>
                                <input type="text" name="key" value="{{$settings->key}}" class="form-control"
                                       placeholder="Enter key">
                            </div>

                            <div class="form-group">
                                <label for="value">Value</label>
                                <input type="text" name="value" value="{{$settings->value}}" class="form-control"
                                       placeholder="Enter value">
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <img src="{{asset('setting_images/'. $settings->image) ?? ''}}" width="50" height="50">
                                <input type="file" name="image" class="form-control">
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
