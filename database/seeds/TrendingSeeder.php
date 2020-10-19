<?php

use Illuminate\Database\Seeder;
use App\Models\Trending;

class TrendingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trendings')->truncate();

        $trending = [
            [
                'poster_path'           => null,
                'adult'                 => false,
                'overview'              => 'Uma bomba-relógio insone e um vendedor de sabonete escorregadio canalizam a agressão masculina primária para uma nova forma chocante de terapia. O conceito deles pega, com \ "clubes da luta \" underground se formando em cada cidade, até que um excêntrico fica no caminho e inicia uma espiral fora de controle em direção ao esquecimento.',
                'release_date'          => '1999-10-12',
                'genre_ids'             => '1',
                'original_title'        => 'Fight Club',
                'original_language'     => 'English',
                'title'                 => 'Fight Club',
                'backdrop_path'         => 'https://i.pinimg.com/originals/86/c0/8e/86c08ed4610de49a5742cb3ba7d43fdd.jpg',
                'popularity'            => '0.5',
                'vote_count'            => 1300,
                'video'                 => false,
                'vote_average'          => 7,
            ],
            [
                'poster_path'           => null,
                'adult'                 => false,
                'overview'              => 'Uma bomba-relógio insone e um vendedor de sabonete escorregadio canalizam a agressão masculina primária para uma nova forma chocante de terapia. O conceito deles pega, com \ "clubes da luta \" underground se formando em cada cidade, até que um excêntrico fica no caminho e inicia uma espiral fora de controle em direção ao esquecimento.',
                'release_date'          => '1999-10-12',
                'genre_ids'             => '1',
                'original_title'        => 'Fight Club',
                'original_language'     => 'English',
                'title'                 => 'Fight Club',
                'backdrop_path'         => 'https://vaeveja.files.wordpress.com/2018/02/vurdalaki.jpg',
                'popularity'            => '0.5',
                'vote_count'            => 1300,
                'video'                 => false,
                'vote_average'          => 7,
            ],
            [
                'poster_path'           => null,
                'adult'                 => false,
                'overview'              => 'Uma bomba-relógio insone e um vendedor de sabonete escorregadio canalizam a agressão masculina primária para uma nova forma chocante de terapia. O conceito deles pega, com \ "clubes da luta \" underground se formando em cada cidade, até que um excêntrico fica no caminho e inicia uma espiral fora de controle em direção ao esquecimento.',
                'release_date'          => '1999-10-12',
                'genre_ids'             => '1',
                'original_title'        => 'Fight Club',
                'original_language'     => 'English',
                'title'                 => 'Fight Club',
                'backdrop_path'         => 'https://podcastloschicos.com.br/wp-content/uploads/2016/05/29maio4junho1.jpg',
                'popularity'            => '0.5',
                'vote_count'            => 1300,
                'video'                 => false,
                'vote_average'          => 7,
            ],
        ];

        $trending = Trending::insert($trending);
    }
}
