<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetails extends Model
{
    use HasFactory;
    
    protected $table = 'products_details';

    protected $guarded = [];

    public $timestamps = false;
    
    public function Product(){
        return $this->hasOne(Product::class, 'product_details_id');
    }
}
