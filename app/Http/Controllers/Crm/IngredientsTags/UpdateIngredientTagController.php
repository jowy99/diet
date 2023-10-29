<?php

declare(strict_types=1);

namespace App\Http\Controllers\Crm\IngredientsTags;

use App\Http\Controllers\Controller;
use App\Http\Requests\Crm\IngredientsTags\UpdateIngredientsTagsRequest;
use App\Models\IngredientsTag;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class UpdateIngredientTagController extends Controller
{
    public function __invoke(UpdateIngredientsTagsRequest $request, int $id): RedirectResponse
    {
        $data = $request->validated();

        $tag = IngredientsTag::query()->findOrFail($id);
        $tag->update($data);

        return Redirect::route('crm.ingredient-tags.edit', $tag->id);
    }
}
