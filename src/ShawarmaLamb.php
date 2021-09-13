<?php

declare(strict_types=1);

namespace App;

class ShawarmaLamb extends Shawarma
{
    protected string $title = "Шаурма из баранины";

    protected array $ingredients = [
        "острый соус",
        "огурцы маринованные",
        "кинза",
        "помидоры свежие",
        "маринованный лук с барбарисом и зеленью",
        "мясо баранины",
        "лаваш арабский"];

    protected float $cost = 85;
}
