<?php
declare(strict_types=1);

namespace App\Http\Requests\Crm\TimesTags;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTimesTagsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => [
                'required',
            ],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
