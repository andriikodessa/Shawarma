<?php

declare(strict_types=1);

namespace App;

class Shawarma
{
    protected float $cost;

    protected function getCost(): float
    {
        return $this->cost;
    }

    protected array $ingredients;

    protected function getIngredients(): array
    {
        return $this->ingredients;
    }

    public string $title;

    protected function getTitle(): string
    {
        return $this->title;
    }
}
