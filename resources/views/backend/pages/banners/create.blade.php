@extends('layouts.backend.master')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Banner Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('banners.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label for="url">URL</label>
                            <input type="text" name="url" class="form-control" placeholder="Enter url">
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status">
                                <option>Select status</option>
                                <option value="0">Passive</option>
                                <option value="1">Active</option>
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
