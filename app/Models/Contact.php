<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    
    protected $table = 'contacts';

    protected $guarded = [];
    
    public function shop(){
        return $this->belongsTo(Shop::class, 'contact_id');
    }
}
