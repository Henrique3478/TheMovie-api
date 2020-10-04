<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrendingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trendings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('poster_path')->nullable();
            $table->boolean('adult');
            $table->string('overview');
            $table->string('release_date');
            $table->integer('genre_ids');
            $table->string('original_title');
            $table->string('original_language');
            $table->string('title');
            $table->string('backdrop_path')->nullable();
            $table->integer('popularity');
            $table->integer('vote_count');
            $table->boolean('video');
            $table->integer('vote_average');
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
        Schema::dropIfExists('trendings');
    }
}
