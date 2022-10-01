<?php

$number = 1;
echo "<h2 align=center>Luas Persegi Panjang</h2><hr>";

class LuasPersegiPanjang
{
    private $panjang;
    private $lebar;

    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;

        $this->print();
    }

    public function calc()
    {
        return $this->panjang * $this->lebar;
    }

    public function print()
    {
        global $number;
        echo "<br>$number. Sebuah persegi memiliki panjang <b>$this->panjang</b> dan lebar <b>$this->lebar</b>, maka luas persegi panjang tersebut adalah <b>", $this->calc(), "</b><br><hr>";
    }
}

$pp1 = new LuasPersegiPanjang(8, 3);
$number++;
$pp2 = new LuasPersegiPanjang(6, 6);
$number++;
$pp3 = new LuasPersegiPanjang(3, 7);
$number++;
