<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'film' => 'Seoul Vibe',
            'user' => 'Moon Hyeon Seong',
            'rating' => '8.4',
            'review' => 'Filmnya sangat bagus',
            'tahun' => '2022-05-12',

        ]);

        Review::create([
            'film' => 'Architecture 101',
            'user' => 'Lee yong-ju',
            'rating' => '8.6',
            'review' => 'Seru banget',
            'tahun' => '2012-12-07',

        ]);

        Review::create([
            'film' => 'Miracle: Letters to the President',
            'user' => 'Lee Jang-hoon',
            'rating' => '8.8',
            'review' => 'Asik',
            'tahun' => '2021-09-19',

        ]);

        Review::create([
            'film' => 'Be with You',
            'user' => 'Lee Jang-hoon',
            'rating' => '8.5',
            'review' => 'Dramanya bagus',
            'tahun' => '2018-02-02',

        ]);

        Review::create([
            'film' => '20th Century Girl',
            'user' => 'Bang Woo-ri',
            'rating' => '9.3',
            'review' => 'seru',
            'tahun' => '2022-10-01',

        ]);
    }
}
