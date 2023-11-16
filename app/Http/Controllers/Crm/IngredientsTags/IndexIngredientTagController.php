<?php
declare(strict_types=1);

namespace App\Http\Controllers\Crm\IngredientsTags;

use App\Http\Controllers\Controller;
use App\Models\IngredientsTag;
use Illuminate\Contracts\View\View;

class IndexIngredientTagController extends Controller
{
    public function __invoke(): View
    {
        $tags = IngredientsTag::query()
            ->get();

        return view('ingredienttags.index')
            ->with(['tags' => $tags]);
    }
}
