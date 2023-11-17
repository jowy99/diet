<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Dishes extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

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

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('dishes')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/webp'])
            ->singleFile()
            ->registerMediaConversions(function () {
                $this->addMediaConversion('thumb')
                    // ->format(Manipulations::FORMAT_WEBP)
                    ->nonOptimized()
                    ->sharpen(10)
                    ->width(300);
                $this->addMediaConversion('web')
                    ->withResponsiveImages()
                    // ->format(Manipulations::FORMAT_WEBP)
                    ->optimize()
                    ->quality(75);
            });
    }
}
