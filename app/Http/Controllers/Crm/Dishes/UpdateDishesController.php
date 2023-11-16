<?php
declare(strict_types=1);

namespace App\Http\Controllers\Crm\Dishes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Crm\Dishes\UpdateDishesRequest;

class UpdateDishesController extends Controller
{
    public function __invoke(UpdateDishesRequest $request)
    {
        $data = $request->validated();
        dd($data);
        return $data;
    }
}
