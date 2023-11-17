<?php
declare(strict_types=1);

namespace App\Http\Controllers\Crm\Menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class IndexMenuController extends Controller
{
    public function __invoke(): View
    {
        return view('menu.index');
    }
}
