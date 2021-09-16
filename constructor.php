<?php
class Produk
{
  public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "pernebit",
    $harga = 0;

  public function __construct($judul, $penulis, $penerbit, $harga)
  {
    $this->judul    = $judul;
    $this->penulis  = $penulis;
    $this->penerbit = $penerbit;
    $this->harga    = $harga;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

$produk3 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk4 = new Produk("Uncharted", "Neil Druckermann", "Sony Computer", 25000);

echo "Komik : " . $produk3->getLabel();
echo "</br>";
echo "Game : " . $produk4->getLabel();
