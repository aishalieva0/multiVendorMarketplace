<!-- Content Wrapper. Contains page content -->
@extends('layouts.backend.master')
@section('content')

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Blogs</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <div class="input-group-append">
                                            <a href="{{route('blogs.create')}}" class="btn btn-primary float-right">
                                                Create
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                    <script>
                                        setTimeout(function () {
                                            $('.alert-success').fadeOut('slow');
                                        }, {{ session('timer') }});
                                    </script>
                                @endif
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Content</th>
                                        <th>Image</th>
                                        <th>URL</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Created date</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($blogs as $blog)
                                        <tr>
                                            <td>{{$blog->title}}</td>
                                            <td>{{$blog->description}}</td>
                                            <td>{{$blog->content}}</td>
                                            <td><img src="{{ asset('storage/' . $blog->image) }}" width="50" height="50"></td>

                                            <td>{{$blog->url}}</td>
                                            <td>{{$blog->cat_id }}</td>
                                            <td>{{$blog->status}}</td>
                                            <td>{{$blog->created_at}}</td>

                                            <td style="display:flex;column-gap:5px;">
                                                <a href="{{ route('blogs.edit',$blog->id) }}" title="Edit"
                                                   class="btn btn-sm btn-primary pull-right">
                                                    Edit
                                                </a>
                                                <form action="{{ route('blogs.destroy',$blog->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-sm btn-danger pull-right">
                                                        Delete
                                                    </button>

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>

            </div>
        </section>
    </div>

@endsection
