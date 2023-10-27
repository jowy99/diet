<?php
declare(strict_types=1);

namespace App\Http\Controllers\Crm\Dishes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Models\Dishes;

class IndexDishesController extends Controller
{
    public function __invoke(): View
    {
        $dishes = Dishes::query()
            ->paginate(12);

        return view('crm.dishes.index')
            ->with([
                'dishes' => $dishes
            ]);
    }
}
