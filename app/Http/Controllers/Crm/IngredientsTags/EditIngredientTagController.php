<?php
declare(strict_types=1);

namespace App\Http\Controllers\Crm\IngredientsTags;

use App\Http\Controllers\Controller;
use App\Models\IngredientsTag;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EditIngredientTagController extends Controller
{
    public function __invoke(Request $request, int $id): View
    {
        $tag = IngredientsTag::query()->findOrFail($id);

        return view('ingredienttags.edit')
            ->with(['tag' => $tag]);
    }
}
