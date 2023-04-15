@extends('layouts.backend.master')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Create product</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter title" id="title">
                        </div>

                        <div class="form-group">
                            <label for="overview">Overview</label>
                            <input type="text" name="overview" class="form-control" placeholder="Enter overview"  id="overview">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control" placeholder="Enter description" id="description">
                        </div>


                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control" id="image">
                        </div>


                        <div class="form-group">
                            <label for="badge">Badge</label>
                            <input type="text" name="badge" class="form-control" placeholder="Enter badge" id="badge">
                        </div>

                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="number" name="quantity" class="form-control" placeholder="Enter quantity" id="quantity">
                        </div>

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" step="0.01" class="form-control" placeholder="Enter price" id="price">
                        </div>

                        <div class="form-group">
                            <label for="offer">Offer</label>
                            <select name="offer" id="offer" class="form-control">
                                <option value="">Choose product will appear in offers section</option>
                                <option value="0">Disable</option>
                                <option value="1">Enable</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="sale_price">Sale price</label>
                            <input type="number" name="sale_price" step="0.01" class="form-control" placeholder="Enter sale price" id="sale_price">
                        </div>

                        <div class="form-group">
                            <label for="stock_count">Stock</label>
                            <input type="number" name="stock_count" class="form-control" placeholder="Enter stock count" id="stock_count">
                        </div>

                        <div class="form-group" hidden>
                            <label for="vendor_id">Vendor</label>
                            <input type="text" name="vendor_id" value="{{ 6 }}" class="form-control" placeholder="Enter vendor" id="vendor_id">
                        </div>

                        <div class="form-group">
                            <label for="cat_id">Category</label>
                            <select name="cat_id" id="cat_id" class="form-control">
                                <option value="">Choose product's category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="brand_id">Brand</label>
                            <select name="brand_id" id="brand_id" class="form-control">
                                <option value="">Choose product's brand</option>
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->title}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="url">URL</label>
                            <input type="text" name="url" class="form-control" placeholder="Enter url" id="url">
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
