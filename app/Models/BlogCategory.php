<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'status'];


    public function blog()
{
    return $this->hasMany(Blog::class, 'cat_id');
}

public function getBlogCountAttribute()
{
    return $this->blog()->count();
}
}
