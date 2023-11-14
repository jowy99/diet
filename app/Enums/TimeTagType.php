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
            self::Short => 'text-white bg-green-300',
            self::Mid => 'text-white bg-sky-300',
            self::Mid_long => 'text-white bg-purple-300',
            self::Long => 'text-white bg-red-300',
        };
    }
}
