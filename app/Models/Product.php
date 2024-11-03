<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $table = 'products';

    protected $guarded = [];
    
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function shop(){
        return $this->belongsTo(Shop::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function orders(){
        return $this->belongsToMany(order::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function thumbnail(){
        $StrImages = $this->images;
        $ArrayImages = explode(',',$StrImages);
        $image=$ArrayImages[0];
        return ($image !== null) ? asset('uploads/products/' . $image) : "";
    }

    public function getActive(){
        return   $this -> status == '1' ? __('admin/globale.desible')  :  __('admin/globale.enable') ;
    }
    
    
}
