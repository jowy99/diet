<?php
declare(strict_types=1);

namespace App\Http\Controllers\Crm\Dishes;

use App\Enums\TimeTagType;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\IngredientsTag;

class AddDishesController extends Controller
{
    public function __invoke(): View
    {
        $ingTags = IngredientsTag::query()
            ->select(['id'])
            ->get();
        $ntags = random_int(1, 4);

        dd($ingTags->random($ntags,true));

        $IngsTags = IngredientsTag::query()
            ->get();

        return view('crm.dishes.add')
            ->with([
                'Ingstags' => $IngsTags,
            ]);
    }
}
