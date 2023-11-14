<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Dishes extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    /**
     * @return BelongsToMany<IngredientsTag>
     */
    public function IngredientsTag(): BelongsToMany
    {
        return $this->belongsToMany(IngredientsTag::class, 'dishes_tags')
            ->withTimestamps();
    }
}
