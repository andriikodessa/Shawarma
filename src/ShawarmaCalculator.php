<?php

declare(strict_types=1);

namespace App;

class ShawarmaCalculator
{
    protected $shawarmas = [];

    public function add(Shawarma $shawarma)
    {
        $this->shawarmas[] = $shawarma;
    }

    public function ingredients()
    {
        $ingredients = [];
        foreach ($this->shawarmas as $shawarma){
            $ingredients += $shawarma->getIngredients();
        }
        return (array_unique($ingredients));
    }


    public function price()
    {
        $price = 0;

        foreach ($this->shawarmas as $shawarma){
            $price += $shawarma->getCost();
        }

        return $price;
    }



//    protected $price = 0;
//    protected $ingredients =[];
//
//    public function add(Shawarma $shawarma)
//    {
//        $this->price += $shawarma->getCost();
//        $this->ingredients = array_merge($this->ingredients, $shawarma->getIngredients());
//    }
//
//    public function ingredients()
//    {
//        return (array_unique($this->ingredients));
//    }
//
//    public function price()
//    {
//        return $this->price;
//    }
}
