<?php
declare(strict_types=1);

namespace App\Http\Controllers\Crm\Dishes;

use App\Enums\TimeTagType;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\Dishes;
use Illuminate\Support\Arr;

class IndexDishesController extends Controller
{
    public function __invoke(): View
    {
        $dishes = Dishes::query()
            ->paginate(12);

        $timetag = TimeTagType::cases();

        return view('crm.dishes.index')
            ->with([
                'dishes' => $dishes,
                'timetags' => $timetag
            ]);
    }
}
