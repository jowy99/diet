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
        $IngsTags = IngredientsTag::query()
            ->get();

        return view('dishes.add')
            ->with([
                'Ingstags' => $IngsTags,
            ]);
    }
}
