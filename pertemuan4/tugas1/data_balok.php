<?php
// Mengimpor file class_balok.php
require_once 'class_balok.php';

// Membuat objek-objek Balok
$balok1 = new Balok(29, 16, 7);
$balok2 = new Balok(13, 10, 3);
$balok3 = new Balok(30, 21, 6);
$balok4 = new Balok(27, 13, 5);

// Menampilkan Luas, Keliling, dan Volume untuk setiap objek
        $balok1 = new Balok(29, 16, 7);
		echo "Objek pertama : <br>";
		echo "Luas			: " . $balok1->getLuas() . "<br>";
		echo "Keliling		: " . $balok1->getKeliling() . "<br>";
		echo "Volume		: " . $balok1->getVolume() . "<br><br>";

		
		$balok2 = new Balok(13, 10, 3);
		echo "Objek kedua	: <br>";
		echo "Luas			: " . $balok2->getLuas() . "<br>";
		echo "Keliling		: " . $balok2->getKeliling() . "<br>";
		echo "Volume		: " . $balok2->getVolume() . "<br><br>";

	
		$balok3 = new Balok(30, 21, 6);
		echo "Objek ketiga	: <br>";
		echo "Luas			: " . $balok3->getLuas() . "<br>";
		echo "Keliling		: " . $balok3->getKeliling() . "<br>";
		echo "Volume		: " . $balok3->getVolume() . "<br><br>";

		
		$balok4 = new Balok(27, 13, 4);
		echo "Objek keempat	: <br>";
		echo "Luas			: " . $balok4->getLuas() . "<br>";
		echo "Keliling		: " . $balok4->getKeliling() . "<br>";
		echo "Volume		: " . $balok4->getVolume() . "<br><br>";
