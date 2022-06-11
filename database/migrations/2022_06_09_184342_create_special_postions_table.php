<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special_postions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("player_id");
            $table->foreign("player_id")->references("id")->on("players")->onDelete("cascade");
            $table->unsignedBigInteger("match_id");
            $table->foreign("match_id")->references("id")->on("matches")->onDelete("cascade");
            $table->string("position");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('special_postions');
    }
};
