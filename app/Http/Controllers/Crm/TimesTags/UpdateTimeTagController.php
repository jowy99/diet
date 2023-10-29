<?php
declare(strict_types=1);

namespace App\Http\Controllers\Crm\TimesTags;

use App\Http\Controllers\Controller;
use App\Http\Requests\Crm\TimesTags\UpdateTimesTagsRequest;
use App\Models\TimesTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;

class UpdateTimeTagController extends Controller
{
    public function __invoke(UpdateTimesTagsRequest $request, int $id): RedirectResponse
    {
        $data = $request->validated();

        $tag = TimesTag::query()->findOrFail($id);
        $tag->update($data);

        return Redirect::route('crm.time-tags.edit', $tag->id);
    }
}
