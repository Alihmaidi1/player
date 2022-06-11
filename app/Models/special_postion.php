<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class special_postion extends Model
{
    use HasFactory;

    public $fillable=["player_id","match_id","position"];


    public function player(){

        return $this->belongsTo("App\Models\player","player_id");
    }

    public function matches(){

        return $this->belongsTo("\App\Models\matches","match_id");
    }
}
