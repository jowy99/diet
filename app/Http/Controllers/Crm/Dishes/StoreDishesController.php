<?php
declare(strict_types=1);

namespace App\Http\Controllers\Crm\Dishes;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\Crm\Dishes\StoreDishesRequest;
use Illuminate\Support\Facades\Redirect;
use App\Models\Dishes;

class StoreDishesController extends Controller
{
    public function __invoke(StoreDishesRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $Ingtags = array_keys(array_filter($data['IngTag'] ?? [], fn($tag) => $tag > 0));
        unset($data['IngTag']);


        $dishes = Dishes::query()->create($data);
        $dishes->IngredientsTag()->sync($Ingtags);

        return Redirect::route('dishes.index');
    }
}
