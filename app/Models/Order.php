<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'vendor_id',
        'delivery_method_id',
        'payment_method',
        'shipping_address',
        'billing_address',
        'payment_status',
        'subtotal',
        'shipping_fee',
        'total',
        'status'
    ];

    public function users()
    {
        $this->belongsTo('users');
    }

    public function vendors()
    {
        $this->belongsTo('vendors');
    }


}
