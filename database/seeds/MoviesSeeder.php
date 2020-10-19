<?php

use Illuminate\Database\Seeder;
use App\Models\Movies;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('movies')->truncate();

        $movies = [
            [
                'adult'             => false,
                'backdrop_path'     => 'https://i.pinimg.com/originals/64/a7/34/64a734284e4dd4c112f48268f30782a9.jpg',
                'id_genres'         => 1,
                'homepage'          => '',
                'original_language' => 'en',
                'original_title'    => '1983',
                'overview'          => 'Uma bomba-relógio insone e um vendedor de sabonete escorregadio canalizam a agressão masculina primária para uma nova forma chocante de terapia. O conceito deles pega, com \ "clubes da luta \" underground se formando em cada cidade, até que um excêntrico fica no caminho e inicia uma espiral fora de controle em direção ao esquecimento.',
                'popularity'        => '0.5',
                'poster_path'       => null,
                'release_date'      => '1999-10-12',
                'runtime'           => '2011-03-13 02:53:50.000000',
                'spoken_languages'  => 'English',
                'status'            => '',
                'tagline'           => 'Quanto você pode saber sobre si mesmo se nunca lutou?',
                'title'             => 'Fight Club',
                'video'             => false,
                'vote_average'      => 7,
                'vote_count'        => 1300,
            ],
            [
                'adult'             => false,
                'backdrop_path'     => 'https://1.bp.blogspot.com/-S1hnO5L4ncQ/W9-K4G1jkBI/AAAAAAAAWqU/41FQsTCVlq0XJ60yHhzzYBW_OJ1xLsZfQCK4BGAYYCw/s1600/venom-bilheteria-outubro.jpg',
                'id_genres'         => 2,
                'homepage'          => '',
                'original_language' => 'en',
                'original_title'    => 'Russian doll',
                'overview'          => 'Uma bomba-relógio insone e um vendedor de sabonete escorregadio canalizam a agressão masculina primária para uma nova forma chocante de terapia. O conceito deles pega, com \ "clubes da luta \" underground se formando em cada cidade, até que um excêntrico fica no caminho e inicia uma espiral fora de controle em direção ao esquecimento.',
                'popularity'        => '0.5',
                'poster_path'       => null,
                'release_date'      => '1999-10-12',
                'runtime'           => '2011-03-13 02:53:50.000000',
                'spoken_languages'  => 'English',
                'status'            => '',
                'tagline'           => 'Quanto você pode saber sobre si mesmo se nunca lutou?',
                'title'             => 'Fight Club',
                'video'             => false,
                'vote_average'      => 7,
                'vote_count'        => 1300,
            ],
            [
                'adult'             => false,
                'backdrop_path'     => 'https://i0.wp.com/centralpandora.com.br/wp-content/uploads/2019/11/lancamentos-ficcao-cientifica-2020.jpg?fit=999%2C562',
                'id_genres'         => 3,
                'homepage'          => '',
                'original_language' => 'en',
                'original_title'    => 'The rain',
                'overview'          => 'Uma bomba-relógio insone e um vendedor de sabonete escorregadio canalizam a agressão masculina primária para uma nova forma chocante de terapia. O conceito deles pega, com \ "clubes da luta \" underground se formando em cada cidade, até que um excêntrico fica no caminho e inicia uma espiral fora de controle em direção ao esquecimento.',
                'popularity'        => '0.5',
                'poster_path'       => null,
                'release_date'      => '1999-10-12',
                'runtime'           => '2011-03-13 02:53:50.000000',
                'spoken_languages'  => 'English',
                'status'            => '',
                'tagline'           => 'Quanto você pode saber sobre si mesmo se nunca lutou?',
                'title'             => 'Fight Club',
                'video'             => false,
                'vote_average'      => 7,
                'vote_count'        => 1300,
            ],
            [
                'adult'             => false,
                'backdrop_path'     => 'https://s2.glbimg.com/JMAz975yjKhgGsyGYffOxTaVZzc=/0x0:1920x1080/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2019/7/Q/HDzJ6uSvieWBI723DeNQ/the-witcher.jpg',
                'id_genres'         => 3,
                'homepage'          => '',
                'original_language' => 'en',
                'original_title'    => 'Elite',
                'overview'          => 'Uma bomba-relógio insone e um vendedor de sabonete escorregadio canalizam a agressão masculina primária para uma nova forma chocante de terapia. O conceito deles pega, com \ "clubes da luta \" underground se formando em cada cidade, até que um excêntrico fica no caminho e inicia uma espiral fora de controle em direção ao esquecimento.',
                'popularity'        => '0.5',
                'poster_path'       => null,
                'release_date'      => '1999-10-12',
                'runtime'           => '2011-03-13 02:53:50.000000',
                'spoken_languages'  => 'English',
                'status'            => '',
                'tagline'           => 'Quanto você pode saber sobre si mesmo se nunca lutou?',
                'title'             => 'Fight Club',
                'video'             => false,
                'vote_average'      => 7,
                'vote_count'        => 1300,
            ],
            [
                'adult'             => false,
                'backdrop_path'     => 'https://trilhadomedo.com/wp-content/uploads/2019/11/capa-lan%C3%A7amentos-2020.jpg',
                'id_genres'         => 2,
                'homepage'          => '',
                'original_language' => 'en',
                'original_title'    => 'Black mirror',
                'overview'          => 'Uma bomba-relógio insone e um vendedor de sabonete escorregadio canalizam a agressão masculina primária para uma nova forma chocante de terapia. O conceito deles pega, com \ "clubes da luta \" underground se formando em cada cidade, até que um excêntrico fica no caminho e inicia uma espiral fora de controle em direção ao esquecimento.',
                'popularity'        => '0.5',
                'poster_path'       => null,
                'release_date'      => '1999-10-12',
                'runtime'           => '2011-03-13 02:53:50.000000',
                'spoken_languages'  => 'English',
                'status'            => '',
                'tagline'           => 'Quanto você pode saber sobre si mesmo se nunca lutou?',
                'title'             => 'Fight Club',
                'video'             => false,
                'vote_average'      => 7,
                'vote_count'        => 1300,
            ],
            [
                'adult'             => false,
                'backdrop_path'     => 'https://i.pinimg.com/originals/86/c0/8e/86c08ed4610de49a5742cb3ba7d43fdd.jpg',
                'id_genres'         => 2,
                'homepage'          => '',
                'original_language' => 'en',
                'original_title'    => 'Fight Club',
                'overview'          => 'Uma bomba-relógio insone e um vendedor de sabonete escorregadio canalizam a agressão masculina primária para uma nova forma chocante de terapia. O conceito deles pega, com \ "clubes da luta \" underground se formando em cada cidade, até que um excêntrico fica no caminho e inicia uma espiral fora de controle em direção ao esquecimento.',
                'popularity'        => '0.5',
                'poster_path'       => null,
                'release_date'      => '1999-10-12',
                'runtime'           => '2011-03-13 02:53:50.000000',
                'spoken_languages'  => 'English',
                'status'            => '',
                'tagline'           => 'Quanto você pode saber sobre si mesmo se nunca lutou?',
                'title'             => 'Fight Club',
                'video'             => false,
                'vote_average'      => 7,
                'vote_count'        => 1300,
            ],
        ];

        $movies = Movies::insert($movies);
    }
}
