<?php

class Lingkaran
{
    //Property
    private $r = 7;
    const PHI = 3.14;

    //Method
    function __construct($jari) {
        $this->r = $jari;
    }

    function getLuas()
    {
        // phi * r^2
        $luas = self::PHI * $this->r * $this->r;
        return $luas;
    }

    function getkel()
    {
        $kel = 2 * self::PHI * $this->r;
        return $kel;
    }
}
