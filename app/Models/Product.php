<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'overview',
        'description',
        'image',
        'badge',
        'quantity',
        'price',
        'offer',
        'sale_price',
        'stock_count',
        'vendor_id',
        'cat_id',
        'brand_id',
        'url',
        'status'
    ];

    public function categories(){
       return $this->belongsTo(ProductCategory::class);
    }

    public function brands(){
        return $this->belongsTo(Brand::class);
    }
    public function vendors(){

        return $this->belongsTo(Vendor::class,'vendor_id');
    }
}
