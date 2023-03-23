@extends('layouts.backend.master')

@section('content')

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Blog Edit</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('blog.update',$blog->id)}}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" value="{{$blog->title}}" class="form-control"
                                       placeholder="Enter title">
                            </div>

                            <div class="form-group">
                                <label for="content">Content</label>
                                <input type="text" name="content" value="{{$blog->content}}" class="form-control"
                                       placeholder="Enter content">
                            </div>

                            <div class="form-group">
                                <label for="desc">Description</label>
                                <input type="text" name="desc" value="{{$blog->desc}}" class="form-control"
                                       placeholder="Enter Description">
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <img src="{{asset('uploads/blog/'. $blog->image) ?? ''}}" width="50" height="50">
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="tags">Tags</label>
                                <input type="text" name="tags" value="{{$blog->tags}}" class="form-control"
                                       placeholder="Enter tags">
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status">
                                    <option value="0" {{($blog->status == 0) ? 'selected' : ''}}>Passive</option>
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
