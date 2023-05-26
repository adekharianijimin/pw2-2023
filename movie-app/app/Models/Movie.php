<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'no' => 1,
            'judul' => 'The Shawshank Redamption',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara'=> 'USA',
            'tahun' => 1994,
            'rating' => 9.8,
        ],
        [
            'no' => 2,
            'judul' => 'Dear M',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara'=> 'Korea Selatan',
            'tahun' => 2021,
            'rating' => 9.8,  
        ],
        [
            'no' => 3,
            'judul' => 'Happines',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara'=> 'Korea Selatan',
            'tahun' => 2021,
            'rating' => 9.5,   
        ],
        [
            'no' => 4,
            'judul' => 'DAS',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara'=> 'Korea Selatan',
            'tahun' => 2023,
            'rating' => 9.9,   
        ],
        [
            'no' => 5,
            'judul' => 'DOTS',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara'=> 'Korea Selatan',
            'tahun' => 2016,
            'rating' => 9.5,   
        ]
    ];

    public function getAllMovies()
    {
        return $this->movies;
    }
}
