<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

$odessa = new \App\ShawarmaOdessa();

echo ("<pre>");
var_dump($odessa);
echo ("</pre>");

$Beef = new \App\ShawarmaBeef();

echo ("<pre>");
var_dump($Beef);
echo ("</pre>");

$Lamb = new \App\ShawarmaLamb();

echo ("<pre>");
var_dump($Lamb);
echo ("</pre>");

$calc = new \App\ShawarmaCalculator();

$calc->add($odessa);

$calc->add($Beef);

echo $calc->price();

var_dump($calc->ingredients());
