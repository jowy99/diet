<?php
declare(strict_types=1);

namespace App\Http\Controllers\Crm\Menu;

use App\Http\Controllers\Controller;
use App\Models\Dishes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;

class CreateMenuController extends Controller
{
    public function __invoke(): RedirectResponse
    {
        $dishes = Dishes::query();

        dd($dishes);

        return Redirect::route('web.menu.index');
    }
}
