<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendry extends Model
{
    use HasFactory;
    
    protected $table = 'calendries';

    protected $guarded = [];
}
