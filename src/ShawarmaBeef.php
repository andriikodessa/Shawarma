<?php

declare(strict_types=1);

namespace App;

class ShawarmaBeef extends Shawarma
{
    protected string $title = "Шаурма говяжья";

    protected array $ingredients = [
        "чесночный соус",
        "говяжий окорок",
        "огурцы маринованные",
        "маринованный лук с барбарисом и зеленью",
        "салат коул слоу",
        "тандырный лаваш",
        "помидоры свежие",
        "хумус",
        "соус тахин"];

    protected float $cost = 75;
}
