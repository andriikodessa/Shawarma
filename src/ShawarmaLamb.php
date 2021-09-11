<?php

declare(strict_types=1);

namespace App;

class ShawarmaLamb extends Shawarma
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

    public string $title = "Шаурма из баранины";

    protected array $ingredients = ["острый соус, огурцы маринованные, кинза, помидоры свежие,
                                  маринованный лук с барбарисом и зеленью, мясо баранины, лаваш арабский"];

    protected float $cost = 85;
}
