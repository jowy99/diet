<?php
declare(strict_types=1);

namespace App\Http\Controllers\Crm\TimesTags;

use App\Http\Controllers\Controller;
use App\Models\TimesTag;
use Illuminate\Contracts\View\View;

class IndexTimeTagController extends Controller
{
    public function __invoke(): View
    {
        $tags = TimesTag::query()
            ->get();

        return view('crm.timetags.index')
            ->with(['tags' => $tags]);
    }
}
