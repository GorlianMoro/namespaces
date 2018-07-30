<?php
namespace WriteIntrum;

class Pen extends Product implements IntfacePen
{
  public function getPen()
  {
    if ($this->color == 'black')
    {
    return  $color = 'multicolor';
    }
    else
    {
      return $color = 'green';
    }
  }
}

$pen1 = new Pen('', 'black', '');
$pen2 = new Pen('', 'red', '');
$pen1->getPen();
$pen2->getPen();

echo $pen1->color . '<br>';
echo $pen1->getPen() . '<br>';
echo $pen2->color . '<br>';
echo $pen2->getPen() . '<br><br>';
