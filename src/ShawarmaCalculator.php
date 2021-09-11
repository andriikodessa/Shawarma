<?php

declare(strict_types=1);

namespace App;

class ShawarmaCalculator
{
    public object $shawarma;

    public function __construct(object $shawarma)
    {
        $this->setShawarma($shawarma);
    }

    public function getShawarma(): object
    {
        return $this->shawarma;
    }

    public function setShawarma(object $shawarma): void
    {
        $this->shawarma = $shawarma;
    }
//    function add(Shawarma $shawarma)
//    {
//
//    }
}
