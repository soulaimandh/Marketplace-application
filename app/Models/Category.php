<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $table = 'categories';

    protected $guarded = [];

    public function posts(){
        return $this->hasMany(Post::class, 'category_id');
    }

    public function questions(){
        return $this->hasMany(question::class,'category_id');
    }

    public function products(){
        return $this->hasMany(Product::class,'category_id');
    }

    public function shops(){
        return $this->hasMany(Shop::class,'category_id');
    }

}
