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
            self::Red_meat => 'text-white bg-red-300',
            self::White_meat => 'text-white bg-gradient-to-r from-red-300 to-white',
            self::Vegetable => 'text-white bg-green-500',
            self::Fruit => 'text-white bg-amber-500',
            self::White_fish => 'text-white bg-blue-500',
            self::Blue_fish => 'text-white bg-gradient-to-r from-blue-500 to-white',
            self::Legume => 'text-white bg-oak-500',
            self::Puree => 'text-white bg-orange-500',
            self::Soup => 'text-white bg-skin-500',
            self::Carbohydrates => 'text-white bg-wine-500',
        };
    }
}
