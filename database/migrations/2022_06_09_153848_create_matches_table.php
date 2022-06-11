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
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("team1_id");
            $table->foreign("team1_id")->references("id")->on("teams")->onDelete("cascade");
            $table->unsignedBigInteger("team2_id");
            $table->foreign("team2_id")->references("id")->on("teams")->onDelete("cascade");
            $table->timestamp("date");
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
        Schema::dropIfExists('matches');
    }
};
