<?php
declare(strict_types=1);

namespace App\Http\Controllers\Crm\Menu;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\Menu;

class IndexMenuController extends Controller
{
    public function __invoke(): View
    {
        $menu = Menu::query()->first();

        return view('menu.index')
            ->with([
            'menu' => $menu
        ]);
    }
}
