<?php

declare(strict_types=1);

namespace App\Http\Controllers\Crm\Tags;

use App\Http\Controllers\Controller;
use App\Http\Requests\Crm\Tags\UpdateTagRequest;
use App\Models\Tag;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class UpdateTagController extends Controller
{
    public function __invoke(UpdateTagRequest $request, int $id): RedirectResponse
    {
        $data = $request->validated();

        $tag = Tag::query()->findOrFail($id);
        $tag->update($data);

        return Redirect::route('crm.tags.edit', $tag->id);
    }
}
