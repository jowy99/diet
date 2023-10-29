<?php
declare(strict_types=1);

namespace App\Models;

use App\Enums\TimeTagType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimesTag extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];
    protected $casts = [
        'type' => TimeTagType::class,
    ];
}
