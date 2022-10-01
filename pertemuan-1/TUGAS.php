<?php

$number = 1;
echo "<h2 align=center>List Kendaraan</h2><hr>";

class Kendaraan
{
    private $merek;
    private $jumlahRoda;
    private $harga;
    private $warna;
    private $bahanBakar;

    public function __construct($merek, $jumlahRoda, $harga, $warna, $bahanBakar)
    {
        $this->merek = $merek;
        $this->jumlahRoda = $jumlahRoda;
        $this->harga = $harga;
        $this->warna = $warna;
        $this->bahanBakar = $bahanBakar;

        $this->print();
    }

    public function print()
    {
        global $number;
        echo "<br>$number. Kendaraan <b>$this->merek</b> memiliki roda sebanyak <b>$this->jumlahRoda</b> dengan harga Rp. <b>" . number_format($this->harga, 0, ',') . "</b>, warna pilihan <b>$this->warna</b> dan bahan bakar <b>$this->bahanBakar</b>.<br><hr>";
    }
}

$kendaraan1 = new Kendaraan("Panther", 4, 200000000, "Biru Metalik", "Solar");
$number++;
$kendaraan2 = new Kendaraan("Virza", 2, 23000000, "Hitam dan Merah", "Bensin");
$number++;
$kendaraan3 = new Kendaraan("Inova", 4, 450000000, "Putih", "Premium");
$number++;
