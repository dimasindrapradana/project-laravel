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
        Schema::create('recommends', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("name_place");
            $table->string("address");
            $table->string("description");
            $table->string("districts");
            $table->string("category");
            $table->int("latitude");
            $table->int("longitude");
            $table->string("picture_url");
            $table->unsignedInteger("user_id");
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
        Schema::dropIfExists("recommends");
    }
};
