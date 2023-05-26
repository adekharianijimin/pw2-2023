<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    use HasFactory;

    protected $reviews = [
        [
            'no' => 1,
            'film' => 'Seoul Vibe',
            'user' => 'Moon Hyeon Seong',
            'rating' => '8.4',
            'review'=> 'Seoul Vibe merupakan film yang menceritakan momen seremonial Olimpiade 1988 di Seoul, Korea Selatan. Kegembiraan masyarakat meningkat pada hari-hari menjelang pembukaan Olimpiade Musim Panas 1988.',
            'tanggal' =>  2022,
            
        ],
        [
            'no' => 2,
            'film' => 'Architecture 101',
            'user' => 'Lee yong-ju',
            'rating' => '8.6',
            'review'=> 'Seung Min menerima kunjungan dari seorang perempuan yang tidak dikenal di kantornya. Ternyata perempuan itu adalah Seo-Yeon, cinta pertama Seung Min yang sudah lama tidak dijimpainya. Seo-Yeon meminta Seung Min untuk membangun kembali rumah lamanya di Pulau Jeju.',
            'tanggal' =>  2012,
        ],
        [
            'no' => 3,
            'film' => 'Miracle: Letters to the President',
            'user' => 'Lee Jang-hoon',
            'rating' => '8.8',
            'review'=> 'Miracle: Letters to the President adalah film romantis Korea Selatan yang disutradarai oleh Lee Jang-hoon untuk Blossom Pictures. Film ini dibintangi oleh Park Jung-min, Lee Sung-min dan Im Yoon-ah, film ini didasarkan pada kisah nyata seorang jenius matematika SMA, Joon-kyeong.',
            'tanggal' =>  2021,
        ],
        [
            'no' => 4,
            'film' => 'Be with You',
            'user' => 'Lee Jang-hoon',
            'rating' => '8.5',
            'review'=> 'Be with You adalah film romansa Korea Selatan tahun 2018 yang dibintangi oleh So Ji-sub dan Son Ye-jin, dan disutradarai oleh Lee Jang-hoon. Film ini merupakan film daur ulang dari film Jepang tahun 2004 yang bernama sama, yang didasarkan dari novel karya Takuji Ichikawa.',
            'tanggal' =>  2018,
        ],
        [
            'no' => 5,
            'film' => '20th Century Girl',
            'user' => 'Bang Woo-ri',
            'rating' => '9.3',
            'review'=> '20th Century Girl adalah film televisi internet Korea Selatan yang akan datang yang ditulis dan disutradarai oleh Bang Woo-ri. Film ini dibintangi oleh Kim Yoo-jung, Byeon Woo-seok, Park Jung-woo dan Roh Yoon-seo. Seri ini menggambarkan persahabatan dan kesegaran cinta pertama yang berlatar belakang tahun 1999.',
            'tanggal' =>  2022,
        ]
    ];

    public function getAllReviews()
    {
        return $this->reviews;
    }
   
}

