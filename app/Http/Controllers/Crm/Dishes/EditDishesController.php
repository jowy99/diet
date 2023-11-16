<?php
declare(strict_types=1);

namespace App\Http\Controllers\Crm\Dishes;

use App\Http\Controllers\Controller;
use App\Models\Dishes;
use App\Models\IngredientsTag;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class EditDishesController extends Controller
{
    public function __invoke(Request $request, int $id): View
    {
        $dishes = Dishes::query()->findOrFail($id);

        $IngsTags = IngredientsTag::query()
            ->get();

        return view('dishes.edit')
            ->with([
                'dish' => $dishes,
                'Ingstags' => $IngsTags
            ]);
    }
}
