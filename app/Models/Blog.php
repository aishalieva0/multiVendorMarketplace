<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'content',
        'image',
        'url',
        'cat_id',
        'status'
    ];

    public function category()
{
    return $this->belongsTo(BlogCategory::class, 'cat_id');
}

}
