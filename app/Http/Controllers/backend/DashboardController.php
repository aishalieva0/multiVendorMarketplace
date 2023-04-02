<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\Vendor;

class DashboardController extends Controller
{
    public function index()
    {

        $blog_count = Blog::where('status', '1')->count();
        $vendor_count = Vendor::count();
        $customer_count = User::where('role_id','3')->count();
        $admin_count = User::where('role_id','1')->count();
        $order_count = Order::count();
        $brand_count = Brand::where('status','1')->count();
        $product_count = Product::where('status','1')->count();

        return view('backend.sections.index',compact(
            'blog_count','vendor_count','customer_count','order_count','admin_count','brand_count','product_count'));
    }
}
