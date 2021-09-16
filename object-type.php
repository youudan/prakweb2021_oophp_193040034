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

class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

$produk1 = new Produk("Bokutachi no Remake", "Kio Nachi", "Media Factory", 65000);
$produk2 = new Produk("Summer Pockets", "Jun Maeda", "VisualArts", 189999);

echo "Light Novel : " . $produk1->getLabel();
echo "</br>";
echo "Game : " . $produk2->getLabel();
echo "</br>";

$infoProduk1 = new CetakInfoProduk();
$infoProduk2 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
echo "</br>";
echo $infoProduk2->cetak($produk2);
