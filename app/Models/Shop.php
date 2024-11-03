<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    
    protected $table = 'shops';

    protected $guarded = [];

    public function products(){
        return $this->hasMany(Products::class, "shop_id");
    }

    public function contacts(){
        return $this->hasMany(Contact::class, "shop_id");
    }

    public function category(){
        return $this->belongsTo(Category::class, "category_id");
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

}
