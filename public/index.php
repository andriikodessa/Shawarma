<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

use App\ShawarmaOdessa;
use App\ShawarmaLamb;
use App\ShawarmaBeef;

$odessa = new ShawarmaOdessa();

echo ("<pre>");
var_dump($odessa);
echo ("</pre>");

$Beef = new ShawarmaBeef();

echo ("<pre>");
var_dump($Beef);
echo ("</pre>");

$Lamb = new ShawarmaLamb();

echo ("<pre>");
var_dump($Lamb);
echo ("</pre>");

