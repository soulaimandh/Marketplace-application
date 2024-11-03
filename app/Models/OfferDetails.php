<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferDetails extends Model
{
    use HasFactory;
    
    protected $table = 'offers_details';

    protected $guarded = [];

    public $timestamps = false;
    
    public function product(){
        return $this->hasOne(Product::class, 'product_details_id');
    }
}
