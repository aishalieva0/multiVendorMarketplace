@extends('layouts.backend.master')

@section('content')

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Blog Category Edit</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('blog_categories.update', $blogcategories->id)}}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" value="{{$blogcategories->title}}" class="form-control"
                                       placeholder="Enter title">
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status">
                                    <option value="0" {{($blogcategories->status == 0) ? 'selected' : ''}}>Passive</option>
                                    <option value="1" {{($blogcategories->status == 1) ? 'selected' : ''}}>Active</option>
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
