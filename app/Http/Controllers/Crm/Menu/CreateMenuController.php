<?php
declare(strict_types=1);

namespace App\Http\Controllers\Crm\Menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Crm\Menu\CreateMenuRequest;
use App\Models\Menu;
use App\Models\Dishes;

class CreateMenuController extends Controller
{
    public function __invoke(CreateMenuRequest $request): RedirectResponse
    {
        $max = $request->validated();

        $menu = Menu::create();

        $randomDishes = Dishes::inRandomOrder()->limit($max['meals'])->get();

        // Adjuntar platos al menú
        foreach ($randomDishes as $randomDish) {
            $menu->dishes()->attach($randomDish->id);
        }

        return Redirect::route('web.menu.index');
    }
}
