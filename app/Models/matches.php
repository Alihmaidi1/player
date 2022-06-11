<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matches extends Model
{
    use HasFactory;
    public $fillable=["team1_id","team2_id","date"];



    public function team1(){

        return $this->belongsTo("\App\Models\\team","team1_id");
    }


    public function team2(){

        return $this->belongsTo("\App\Models\\team","team2_id");
    }


    public function special(){

        return $this->hasOne("\App\Models\special_position","match_id");
    }
}
