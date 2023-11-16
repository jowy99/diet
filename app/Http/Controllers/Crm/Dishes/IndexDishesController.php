<?php
declare(strict_types=1);

namespace App\Http\Controllers\Crm\Dishes;

use App\Enums\TimeTagType;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\Dishes;
use Illuminate\Http\Request;

class IndexDishesController extends Controller
{
    public function __invoke(Request $request): View
    {
        $dishes = Dishes::query()
            ->when(!empty($request->search), function ($query) use ($request){
                return $query->where('name', '=', $request->search);
            })
            ->get();

        $timetag = TimeTagType::cases();

        return view('dishes.index')
            ->with([
                'dishes' => $dishes,
                'timetags' => $timetag
            ]);
    }
}
