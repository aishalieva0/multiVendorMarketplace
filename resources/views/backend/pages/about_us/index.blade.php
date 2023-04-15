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
                            <h3 class="card-title">About Us</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <div class="input-group-append">
                                        <a href="{{route('about_us.create')}}" class="btn btn-primary float-right">
                                            Create
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            @if($message= Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>Image 1</th>
                                    <th>Image 2</th>
                                    <th>Image 3</th>
                                    <th>Image 4</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($about_us as $about)
                                <tr>
                                    <td><img src="{{asset('about_us_image_1/'. $about->image_1) ?? ''}}" width="50" height="50"></td>
                                    <td><img src="{{asset('about_us_image_2/'. $about->image_2) ?? ''}}" width="50" height="50"></td>
                                    <td><img src="{{asset('about_us_image_3/'. $about->image_3) ?? ''}}" width="50" height="50"></td>
                                    <td><img src="{{asset('about_us_image_4/'. $about->image_4) ?? ''}}" width="50" height="50"></td>
                                    <td>{{$about->title}}</td>
                                    <td>{{$about->content}}</td>

                                    <td style="display:flex;column-gap:5px;">
                                        <a href="{{ route('about_us.edit',$about->id) }}" title="Edit"
                                           class="btn btn-sm btn-primary pull-right">
                                            Edit
                                        </a>
                                        <form action="{{ route('about_us.destroy',$about->id) }}" method="post">
                                        @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger pull-right">Delete</button>

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
