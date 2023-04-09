@extends('layouts.backend.master')

@section('content')

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit blog</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('blogs.update',$blog->id)}}" method="post"
                          enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" value="{{$blog->title}}" class="form-control"
                                       placeholder="Enter title" id="title">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" value="{{$blog->description}}"
                                       class="form-control"
                                       placeholder="Enter Description" id="description">
                            </div>

                            <div class="form-group">
                                <label for="content">Content</label>
                                <input type="text" name="content" value="{{$blog->content}}" class="form-control"
                                       placeholder="Enter content" id="content">
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <img src="{{asset('blogs_images/'. $blog->image) ?? ''}}" width="50" height="50">
                                <input type="file" name="image" class="form-control" id="image">
                            </div>

                            <div class="form-group">
                                <label for="url">URL</label>
                                <input type="text" name="url" value="{{$blog->url}}" class="form-control"
                                       placeholder="Enter url" id="url">
                            </div>

                            <div class="form-group">
                                <label for="cat_id">Category</label>
                                <select name="cat_id" id="cat_id" class="form-control">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->category->id }}" {{ $category->category->id == $blog->cat_id ? 'selected' : '' }}>{{ $category->category->title }}</option>
                                        @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" class="form-control">
                                    <option value="0" {{($blog->status == 0) ? 'selected' : ''}}>Inactive</option>
                                    <option value="1" {{($blog->status == 1) ? 'selected' : ''}}>Active</option>
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
