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
            'genre' => 'Komedi',
            'deskripsi' => 'Genre komedi adalah genre film di mana penekanan utama adalah pada kelucuan',
        ],
        [
            'no' => 2,
            'genre' => 'Horor',
            'deskripsi' => 'Genre horor adalah genre cerita rekaan yang dimaksudkan untuk menimbulkan perasaan takut atau ngeri bagi penyimaknya',
        ],
        [
            'no' => 3,
            'genre' => 'Aksi',
            'deskripsi' => 'Genre aksi adalah genre film yang biasanya sangat menegangkan saat ditonton',
        ],
        [
            'no' => 4,
            'genre' => 'Animasi',
            'deskripsi' => 'Genre animasi adalah genre film yang merupakan karya tangan (gambar) yang bergerak',
        ],
        [
            'no' => 5,
            'genre' => 'Romantis',
            'deskripsi' => 'Genre romantis adalah genre film yang menceritakan kisah cinta yang tercipta di antara para tokoh',
        ],
    ];

    public function getAllGenres()
    {
        return $this->genres;
    }
}

