<?php

declare(strict_types=1);

namespace App\Enums;

enum TagType
{
    case Potato;
    case Fish;

    public function color(): string
    {
        return match ($this) {
            self::Potato => 'text-white bg-orange-300',
            self::Fish => 'text-white bg-blue-500',
        };
    }
}
