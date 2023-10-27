<?php
declare(strict_types=1);

namespace App\Http\Controllers\Crm\Tags;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Contracts\View\View;

class IndexTagsController extends Controller
{
    public function __invoke(): View
    {
        $tags = Tag::query()
            ->get();

        return view('crm.tags.index')
            ->with(['tags' => $tags]);
    }
}
