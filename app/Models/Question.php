<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    
    protected $table = 'questions';

    protected $guarded =[];

    public function reponse(){
        return $this->hasMany(reponse::class);
    }

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function utilisateur(){
        return $this->belongsTo(utilisateur::class);
    }
}
