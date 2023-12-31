<?php
declare(strict_types=1);

namespace App\Http\Controllers\Crm\Dishes;

use App\Http\Controllers\Controller;
use App\Models\Dishes;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class DetailsDishesController extends Controller
{
    public function __invoke(Request $request, int $id): View
    {
        $dishes = Dishes::query()->findOrFail($id);

        return view('dishes.details')
            ->with([
                'dish' => $dishes
            ]);
    }
}
