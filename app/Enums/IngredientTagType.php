<?php
declare(strict_types=1);

namespace App\Enums;

enum IngredientTagType
{
    case Red_meat;
    case White_meat;
    case Vegetable;
    case Fruit;
    case White_fish;
    case Blue_fish;
    case Legume;
    case Puree;
    case Soup;
    case Carbohydrates;

    public function color(): string
    {
        return match ($this) {
            self::Red_meat => 'text-white bg-sky-300',
            self::White_meat => 'text-white bg-blue-500',
            self::Vegetable => 'text-white bg-blue-500',
            self::Fruit => 'text-white bg-blue-500',
            self::White_fish => 'text-white bg-blue-500',
            self::Blue_fish => 'text-white bg-blue-500',
            self::Legume => 'text-white bg-blue-500',
            self::Puree => 'text-white bg-blue-500',
            self::Soup => 'text-white bg-blue-500',
            self::Carbohydrates => 'text-white bg-blue-500',
        };
    }
}
