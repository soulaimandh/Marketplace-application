<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarDetails extends Model
{
    use HasFactory;
    
    protected $table = 'cars_details';

    protected $guarded = [];

    public $timestamps = false;
    
    public function product(){
        return $this->hasOne(Product::class, 'product_details_id');
    }
}
