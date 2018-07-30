<?php
namespace Techvision;

class Television extends Product implements IntfaceTv
{
  public $diagonal = 28;
  public function getTelevision()
  {
    $this->diagonal = 32;
  }
}

$tv1 = new Television('gray', 'Samsung_bw265739', '');
$tv1->diagonal;

$tv2 = new Television('black', 'LG_hc6811387', '');
$tv2->getTelevision();
$tv2->diagonal;

echo $tv1->name . '<br>';
echo $tv1->color . '<br>';
echo $tv1->diagonal . '<br>';
echo $tv2->name . '<br>';
echo $tv2->color . '<br>';
echo $tv2->diagonal . '<br><br>';
