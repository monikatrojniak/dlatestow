<?php
php_info();

$zmienna = 'testowa zmienna';

echo $zmienna;
$tab = array(1,25,45,214,789);

$x = 1;
$y = 2;

echo $x+$y;


$z = $y-$x;
echo $z;

echo $x-$y;

var_dump($tab);
foreach($tab as $szukaj)
{
	echo $szukaj;
}
