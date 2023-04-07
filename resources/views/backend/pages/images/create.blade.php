@extends('layouts.backend.master')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Image Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('images.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label for="main">Main</label>
                            <input type="text" name="main" class="form-control" placeholder="Enter main">
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
