<?php
declare(strict_types=1);

namespace App\Http\Controllers\Crm\TimesTags;

use App\Http\Controllers\Controller;
use App\Models\TimesTag;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EditTimeTagController extends Controller
{
    public function __invoke(Request $request, int $id): View
    {
        $tag = TimesTag::query()->findOrFail($id);

        return view('crm.timetags.edit')
            ->with(['tag' => $tag]);
    }
}
