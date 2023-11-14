<?php
declare(strict_types=1);

namespace App\Models;

use App\Enums\IngredientTagType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;



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
     * @return HasMany<Dishes>
     */
    public function Dishes(): HasMany
    {
        return $this->hasMany(Dishes::class, 'id');
    }
}
