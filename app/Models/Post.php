<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";
    protected $guarded = [];


    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    public function thumbnail()
    {
        return ($this->thumbnail !== null) ? asset('uploads/posts/' . $this->thumbnail) : "";
    }
}
