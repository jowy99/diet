<?php
declare(strict_types=1);

namespace App\Support\MediaLibrary;

use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\PathGenerator\DefaultPathGenerator;

class UuidPathGenerator extends DefaultPathGenerator
{
    protected function getBasePath(Media $media): string
    {
        return $media->getAttribute('uuid');
    }
}
