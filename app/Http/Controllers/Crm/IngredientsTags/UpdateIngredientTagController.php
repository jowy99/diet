<?php

declare(strict_types=1);

namespace App\Http\Controllers\Crm\IngredientsTags;

use App\Http\Controllers\Controller;
use App\Http\Requests\Crm\Tags\UpdateTagRequest;
use App\Models\IngredientsTag;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class UpdateIngredientTagController extends Controller
{
    public function __invoke(UpdateTagRequest $request, int $id): RedirectResponse
    {
        $data = $request->validated();

        $tag = IngredientsTag::query()->findOrFail($id);
        $tag->update($data);

        return Redirect::route('crm.ingredienttags.edit', $tag->id);
    }
}
