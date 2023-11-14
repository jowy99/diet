<?php
declare(strict_types=1);

namespace App\Models;

use App\Enums\IngredientTagType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class IngredientsTag extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];
    protected $casts = [
        'type' => IngredientTagType::class,
    ];

    /**
     * @return BelongsToMany<Dishes>
     */
    public function Dishes(): BelongsToMany
    {
        return $this->belongsToMany(Dishes::class, 'dishes_tags')
            ->withTimestamps();
    }
}
