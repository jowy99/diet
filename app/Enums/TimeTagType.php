<?php
declare(strict_types=1);

namespace App\Enums;

enum TimeTagType
{
    case Short;
    case Mid;
    case Mid_long;
    case Long;

    public function color(): string
    {
        return match ($this) {
            self::Short => 'text-white bg-sky-300',
            self::Mid => 'text-white bg-blue-500',
            self::Mid_long => 'text-white bg-orange-500',
            self::Long => 'text-white bg-red-500',
        };
    }
}
