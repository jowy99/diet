<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Menu extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    /**
     * @return BelongsToMany<Dishes>
     */
    public function Dishes(): BelongsToMany
    {
        return $this->belongsToMany(Dishes::class, 'dishes_menu')
            ->withTimestamps();
    }
}
