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
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string("name_place");
            $table->string("address");
            $table->string("description");
            $table->string("latitude");
            $table->string("longitude");
            $table->string("picture_url");
            $table->string("districts");
            $table->string("video_url");
            $table->float("rating");
            $table->date("date");
            $table->timestamp("time");
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
        Schema::dropIfExists("places");
    }
};
