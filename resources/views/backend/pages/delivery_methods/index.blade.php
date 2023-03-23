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
                            <h3 class="card-title">Delivery methods</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <div class="input-group-append">
                                        <a href="{{route('delivery_methods.create')}}" class="btn btn-primary float-right">
                                            Create
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                   <!-- /.card-header -->

                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            <script>
                                setTimeout(function(){
                                    $('.alert-success').fadeOut('slow');
                                }, {{ session('timer') }});
                            </script>
                        @endif

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($delivery_methods as $delivery_method)
                                <tr>
                                    <td>{{$delivery_method->title}}</td>
                                    <td>{{$delivery_method->description}}</td>
                                    <td>{{$delivery_method->price}}</td>

                                    <td style="display:flex;column-gap:5px;">
                                        <a href="{{ route('delivery_methods.edit',$delivery_method->id) }}" title="Edit"
                                           class="btn btn-sm btn-primary pull-right">
                                            Edit
                                        </a>
                                        <form action="{{ route('delivery_methods.destroy',$delivery_method->id) }}" method="post">
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
