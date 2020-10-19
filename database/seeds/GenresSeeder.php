<?php

use Illuminate\Database\Seeder;
use App\Models\Genres;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->truncate();

        $genres = [
            ['name' => 'Drama'],
            ['name' => 'Ação'],
            ['name' => 'Terror'],
        ];

        $genres = Genres::insert($genres);
    }
}
