<?php
declare(strict_types=1);

namespace App\Http\Controllers\Crm\Menu;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class AlertMenuController extends Controller
{
    public function __invoke(): View
    {
        return view('menu.alert');
    }
}
