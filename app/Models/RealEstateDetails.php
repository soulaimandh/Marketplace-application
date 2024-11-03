<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealEstateDetails extends Model
{
    use HasFactory;
    
    protected $table = 'real_estate_details';

    protected $guarded = [];
    
    public $timestamps = false;
    
    public function Product(){
        return $this->hasOne(Product::class, 'product_details_id');
    }
}
