<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Movies;
use Faker\Generator as Faker;

$factory->define(Movies::class, function (Faker $faker) {
    return [
        'adult'             => false,
        'backdrop_path'     => 'https://occ-0-2954-2568.1.nflxso.net/dnm/api/v6/0DW6CdE4gYtYx8iy3aj8gs9WtXE/AAAABa91xRJtqPbJxqPMGMfC7TH2spXiQsfWxWeeukk1NXlZEIeZiB8TbNooJFPErxmaj4YmxRz0OMdCohKrKZ7thjV5o7rT7fSniw.jpg?r=c3c',
        'id_genres'         => 1,
        'homepage'          => '',
        'original_language' => 'en',
        'original_title'    => 'Fight Club',
        'overview'          => 'Uma bomba-relógio insone e um vendedor de sabonete escorregadio canalizam a agressão masculina primária para uma nova forma chocante de terapia. O conceito deles pega, com \ "clubes da luta \" underground se formando em cada cidade, até que um excêntrico fica no caminho e inicia uma espiral fora de controle em direção ao esquecimento.',
        'popularity'        => '0.5',
        'poster_path'       => null,
        'release_date'      => '1999-10-12',
        'runtime'           => 139,
        'spoken_languages'  => 'English',
        'status'            => '',
        'tagline'           => 'Quanto você pode saber sobre si mesmo se nunca lutou?',
        'title'             => 'Fight Club',
        'video'             => false,
        'vote_average'      => 7,
        'vote_count'        => 1300,
    ];
});
