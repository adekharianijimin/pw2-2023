<?php
    class Calculator {

        private $x, $y;

            public function __construct($x, $y) {
            $this->x = $x;
            $this->y = $y;
            }
            
            public function pertambahan() {
                return $this->x + $this->y;
            }
          
            public function pengurangan() {
                return $this->x - $this->y;
            }
          
            public function pembagian() {
                return $this->x / $this->y;
            }
          
            public function perkalian() {
                return $this->x * $this->y;
            }}
    

        

    // Buat object dan tampilkan masing-masing method
    $calculator = new Calculator(13, 3);
echo "Hasil Pertambahan : ".$calculator->pertambahan()."<br>";
echo "Hasil Pengurangan : ".$calculator->pengurangan()."<br>";
echo "Hasil Pembagian   : ".$calculator->pembagian()."<br>";
echo "Hasil Perkalian   : ".$calculator->perkalian()."<br>";
