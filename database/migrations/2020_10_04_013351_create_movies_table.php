<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('adult');
            $table->string('backdrop_path')->nullable();
            $table->integer('id_genres');
            $table->string('homepage')->nullable();
            $table->string('original_language');
            $table->string('original_title');
            $table->string('overview')->nullable();
            $table->integer('popularity');
            $table->string('poster_path')->nullable();
            $table->string('release_date');
            $table->dateTime('runtime')->nullable();
            $table->string('spoken_languages');
            $table->string('status');
            $table->string('tagline')->nullable();
            $table->string('title');
            $table->boolean('video');
            $table->integer('vote_average');
            $table->integer('vote_count');
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
        Schema::dropIfExists('movies');
    }
}
