<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\account;
use App\Http\Controllers\api\team;
use App\Http\Controllers\api\player;
use App\Http\Controllers\api\matches;

use App\Http\Controllers\api\special;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['middleware'=>["api_password"]],function(){


    Route::post("/login",[account::class,"login"]);

    Route::group(['middleware'=>["check_token:api"]],function(){


        Route::post("/logout",[account::class,"logout"]);


        // team operation
        Route::post('team.store',[team::class,"store"]);
        Route::post("team.delete",[team::class,"delete"]);
        Route::post("team.update",[team::class,"update"]);
        Route::post("team.find",[team::class,"find"]);

        // player operation
        Route::post('player.store',[player::class,"store"]);
        Route::post("player.delete",[player::class,"delete"]);
        Route::post("player.update",[player::class,"update"]);
        Route::post("player.find",[player::class,"find"]);


        // matches operation
        Route::post('matches.store',[matches::class,"store"]);
        Route::post("matches.delete",[matches::class,"delete"]);
        Route::post("matches.update",[matches::class,"update"]);
        Route::post("matches.find",[matches::class,"find"]);


        // special operation
        Route::post('special.store',[special::class,"store"]);
        Route::post("special.delete",[special::class,"delete"]);
        Route::post("special.update",[special::class,"update"]);
        Route::post("special.find",[special::class,"find"]);





    });

});
