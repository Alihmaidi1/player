<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\account;
use App\Http\Controllers\admin\player;
use App\Http\Controllers\admin\team;
use App\Http\Controllers\admin\matches;
use App\Http\Controllers\admin\special;


// admin operation
Route::group(["middleware"=>["guest"]],function(){

    Route::get('/',[account::class,"index"])->name("loginindex");
    Route::post("/loginpost",[account::class,"login"])->name("login");

});

Route::group(["middleware"=>"auth"],function(){


    Route::get("/home",[team::class,"index"])->name("dashboard");
    Route::get("logout",[account::class,"logout"])->name("logout");


    // player operation
    Route::get("player.index",[player::class,"index"])->name("player.index");
    Route::get("player.create",[player::class,"create"])->name("player.create");
    Route::post("player.store",[player::class,"store"])->name("player.store");
    Route::get("player.delete/{id}",[player::class,"delete"])->name("player.delete");
    Route::get("player.edit/{id}",[player::class,"edit"])->name("player.edit");
    Route::post("player.update",[player::class,"update"])->name("player.update");


    // team operation
    Route::get("team.index",[team::class,"index"])->name("team.index");
    Route::get("team.create",[team::class,"create"])->name("team.create");
    Route::post("team.store",[team::class,"store"])->name("team.store");
    Route::get("team.delete/{id}",[team::class,"delete"])->name("team.delete");
    Route::get("team.edit/{id}",[team::class,"edit"])->name("team.edit");
    Route::post("team.update",[team::class,"update"])->name("team.update");

    // match operation
    Route::get("matches.index",[matches::class,"index"])->name("matches.index");
    Route::get("match.create",[matches::class,"create"])->name("match.create");
    Route::post("match.store",[matches::class,"store"])->name("match.store");
    Route::get("match.delete/{id}",[matches::class,"delete"])->name("match.delete");
    Route::get("match.edit/{id}",[matches::class,"edit"])->name("match.edit");
    Route::post("match.update",[matches::class,"update"])->name("match.update");


    // special operation
    Route::get("special.index",[special::class,"index"])->name("special.index");
    Route::get("special.create",[special::class,"create"])->name("special.create");
    Route::post("special.store",[special::class,"store"])->name("special.store");
    Route::get("special.delete/{id}",[special::class,"delete"])->name("special.delete");
    Route::get("special.edit/{id}",[special::class,"edit"])->name("special.edit");
    Route::post("special.update",[special::class,"update"])->name("special.update");
});
