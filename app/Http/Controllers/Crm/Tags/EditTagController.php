<?php

declare(strict_types=1);

namespace App\Http\Controllers\Crm\Tags;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EditTagController extends Controller
{
    public function __invoke(Request $request, int $id): View
    {
        $tag = Tag::query()->findOrFail($id);

        return view('crm.tags.edit')
            ->with(['tag' => $tag]);
    }
}
