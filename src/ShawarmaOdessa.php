<?php

declare(strict_types=1);

namespace App;

class ShawarmaOdessa extends Shawarma
{
    protected function getCost(): float
    {
        return parent::getCost();
    }

    protected function getIngredients(): array
    {
        return parent::getIngredients();
    }

    protected function getTitle(): string
    {
        return parent::getTitle();
    }

    public string $title = "Шаурма Одесская";

    protected array $ingredients = ["огурцы маринованные, картофель жареный, чесночный соус, тандырный лаваш, 
                                  маринованный лук с барбарисом и зеленью, мясо куриное, салат коул слоу, 
                                  корейская морковь"];
    protected float $cost = 69;
}
