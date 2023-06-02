<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $genres = [
        [
            'no' => 1,
            'genre' => 'crime',
            'deskripsi' => 'film tentang kejahatan',
        ],

        [
            'no' => 2,
            'genre' => 'drama',
            'deskripsi' => 'film tentang kehidupan',
        ],
       
        [
            'no' => 3,
            'genre' => 'romence',
            'deskripsi' => 'film tentang cinta',
        ],
       
        [
            'no' => 4,
            'genre' => 'horor',
            'deskripsi' => 'film tentang hantu',
        ],
        
        [
            'no' => 5,
            'genre' => 'anime',
            'deskripsi' => 'film tentang kartun jepang',
        ],
    ];
    

   

    public function getAllGenres()
    {
        return $this->genres;
    }
}

