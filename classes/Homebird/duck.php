<?php
namespace Homebird;

class Duck extends Product
{
  public $placelive;
}

$duck1 = new Duck('', '', 'Wood');
$duck1->type;
$duck2 = new Duck('', '', 'Domestic');
$duck2->type;

echo $duck1->type . '<br>';
echo $duck2->type . '<br><br>';
