<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    use HasFactory;

    function employe()
    {
        return $this->belongsTo(Employe::class,'Num_Employe');    
    }
}
