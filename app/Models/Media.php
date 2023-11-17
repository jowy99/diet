<?php
declare(strict_types=1);

namespace App\Models;

use Spatie\MediaLibrary\MediaCollections\Models\Media as SpatieMedia;


class Media extends SpatieMedia
{
    public function getHighestOrderNumber(): int
    {
        return (int)$this->newQuery()
            ->where('model_type', $this->getAttribute('model_type'))
            ->where('model_id', $this->getAttribute('model_id'))
            ->where('collection_name', $this->getAttribute('collection_name'))
            ->max($this->determineOrderColumnName());
    }
}
