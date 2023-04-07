@extends('layouts.backend.master')

@section('content')

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Product Edit</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('products.update',$product->id)}}" method="post"
                          enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" value="{{$product->title}}" class="form-control"
                                       placeholder="Enter title" id="title">
                            </div>

                            <div class="form-group">
                                <label for="overview">Overview</label>
                                <input type="text" name="overview" value="{{$product->overview}}" class="form-control"
                                       placeholder="Enter overview" id="overview">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" value="{{$product->description}}"
                                       class="form-control"
                                       placeholder="Enter Description" id="description">
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <img src="{{asset('products_images/'. $product->image) ?? ''}}" width="50" height="50">
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="badge">Badge</label>
                                <input type="text" name="badge" value="{{$product->badge}}" class="form-control"
                                       placeholder="Enter badge" id="badge">
                            </div>

                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="number" name="quantity" value="{{$product->quantity}}" class="form-control"
                                       placeholder="Enter quantity" id="quantity">
                            </div>

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" name="price" step="0.01" value="{{$product->price}}"
                                       class="form-control"
                                       placeholder="Enter price" id="price">
                            </div>

                            <div class="form-group">
                                <label for="offer">Offer</label>
                                <select name="offer" class="form-control">
                                    <option value="0" {{($product->offer == 0) ? 'selected' : ''}}>Inactive</option>
                                    <option value="1" {{($product->offer == 1) ? 'selected' : ''}}>Active</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="sale_price">Sale price</label>
                                <input type="number" name="sale_price" step="0.01" value="{{$product->sale_price}}"
                                       class="form-control"
                                       placeholder="Enter sale price" id="sale_price">
                            </div>

                            <div class="form-group">
                                <label for="stock_count">Stock</label>
                                <input type="number" name="stock_count" value="{{$product->stock_count}}"
                                       class="form-control"
                                       placeholder="Enter stock count" id="stock_count">
                            </div>

                            <div class="form-group">
                                <label for="cat_id">Category</label>
                                <select name="cat_id" id="cat_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option
                                            value="{{$category->id}}" {{($category->id == $product->cat_id) ? 'selected' : ''}}>{{$category->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="brand_id">Brand</label>
                                <select name="brand_id" id="brand_id" class="form-control">
                                    @foreach($brands as $brand)
                                        <option
                                            value="{{$brand->id}} {{($brand->id == $product->brand_id) ? 'selected' : ''}}">{{$brand->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="url">URL</label>
                                <input type="text" name="url" value="{{$product->url}}" class="form-control"
                                       placeholder="Enter url" id="url">
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" class="form-control">
                                    <option value="0" {{($product->status == 0) ? 'selected' : ''}}>Inactive</option>
                                    <option value="1" {{($product->status == 1) ? 'selected' : ''}}>Active</option>
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
