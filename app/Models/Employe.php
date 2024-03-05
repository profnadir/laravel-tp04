<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    function taches() 
    {
        return $this->hasMany(Tache::class,'Num_Employe');
    }
}
