<?php
namespace Transport;

class Car extends Product // implements IntfaceCar
{
  public function getCar()
  {
    if ($this->color == 'black')
    {
      return  $color = 'blue';
    }
    else
    {
      return $this->color;
    }
  }
}

$lada = new Car('LadaNine', 'black', 'sedan');
$lada->getCar() . '<br>';

$reno = new Car('Renault_Megane', 'gray', 'sedan');

echo $lada->name . '<br>';
echo $lada->type . '<br>';
echo $lada->getCar() . '<br>';
echo $lada->color . '<br>';

echo $reno->name . '<br>';
echo $reno->type . '<br>';
echo $reno->color . '<br><br>';
