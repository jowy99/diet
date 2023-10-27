<?php
declare(strict_types=1);

namespace App\Http\Controllers\Crm\Dishes;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class AddDishesController extends Controller
{
    public function __invoke(): View
    {
        return view('crm.dishes.add');
    }
}
