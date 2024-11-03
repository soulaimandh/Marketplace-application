<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Wishlist extends Model
{
    use HasFactory;
    
    protected $table = 'favorisers';

    protected $guarded = [];


    public function products(){
        return $this->hasMany(Product::class, 'product_id','user_id');
    }
}
