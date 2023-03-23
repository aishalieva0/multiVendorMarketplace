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
                            <h3 class="card-title">Products</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <div class="input-group-append">
                                        <a href="{{route('products.create')}}" class="btn btn-primary float-right">
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
                                    <th>Title</th>
                                    <th>Overview</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Badge</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Offer</th>
                                    <th>Sale price</th>
                                    <th>Stock</th>
                                    <th>Vendor</th>
                                    <th>Category</th>
                                    <th>Brand</th>
                                    <th>URL</th>
                                    <th>Status</th>
                                    <th>Created date</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{$product->title}}</td>
                                    <td>{{$product->overview}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->image}}</td>
                                    <td>{{$product->badge}}</td>
                                    <td>{{$product->quantity}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->offer}}</td>
                                    <td>{{$product->sale_price}}</td>
                                    <td>{{$product->stock_count}}</td>
                                    <td>{{$product->vendor_id }}</td>
                                    <td>{{$product->cat_id }}</td>
                                    <td>{{$product->brand_id }}</td>
                                    <td>{{$product->url}}</td>
                                    <td>{{$product->status}}</td>
                                    <td>{{$product->created_at}}</td>

                                    <td style="display:flex;column-gap:5px;">
                                        <a href="{{ route('products.edit',$product->id) }}" title="Edit"
                                           class="btn btn-sm btn-primary pull-right">
                                            Edit
                                        </a>
                                        <form action="{{ route('products.destroy',$product->id) }}" method="post">
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
