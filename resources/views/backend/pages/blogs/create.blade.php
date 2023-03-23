@extends('layouts.backend.master')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create blog</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @include('errors')
                        <div class="card-body">

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter title"
                                       id="title">

                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" class="form-control" placeholder="Enter description"
                                       id="description">
                            </div>

                            <div class="form-group">
                                <label for="content">Content</label>
                                <input type="text" name="content" class="form-control" placeholder="Enter content"
                                       id="content">
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control" id="image">
                            </div>

                            <div class="form-group">
                                <label for="url">URL</label>
                                <input type="text" name="url" class="form-control" placeholder="Enter url" id="url">
                            </div>

                            <div class="form-group">
                                <label for="cat_id">Category</label>
                                <select name="cat_id" id="cat_id" class="form-control">
                                    <option value="">Choose blog's category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="">Choose status</option>
                                    <option value="0">Disable</option>
                                    <option value="1">Enable</option>
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
