<?php

declare(strict_types=1);

namespace App;

class ShawarmaBeef extends Shawarma
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
    public string $title = "Шаурма говяжья";

    protected array $ingredients = ["чесночный соус, говяжий окорок, огурцы маринованные,
                                  маринованный лук с барбарисом и зеленью, салат коул слоу,
                                  тандырный лаваш, помидоры свежие, хумус, соус тахин"];

    protected float $cost = 75;
}
