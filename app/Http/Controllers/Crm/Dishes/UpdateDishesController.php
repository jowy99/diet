<?php
declare(strict_types=1);

namespace App\Http\Controllers\Crm\Dishes;

use App\Http\Controllers\Controller;
use App\Models\Dishes;
use App\Http\Requests\Crm\Dishes\UpdateDishesRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Request;

class UpdateDishesController extends Controller
{
    public function __invoke(UpdateDishesRequest $request, int $id): RedirectResponse
    {
        $data = $request->validated();

        $Ingtags = array_keys(array_filter($data['IngTag'] ?? [], fn($tag) => $tag > 0));
        unset($data['IngTag']);

        $dish = Dishes::query()
            ->findOrFail($id);

        $dish->update($data);
        $dish->IngredientsTag()->sync($Ingtags);
        
        return Redirect::route('web.dishes.details', $id);
    }
}
