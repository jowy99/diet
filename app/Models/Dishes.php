<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dishes extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    /**
     * @return HasMany<IngredientsTag>
     */
    public function IngredientsTag(): HasMany
    {
        return $this->hasMany(IngredientsTag::class, 'id');
    }
}
