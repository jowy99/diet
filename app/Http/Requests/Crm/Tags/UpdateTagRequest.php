<?php

declare(strict_types=1);

namespace App\Http\Requests\Crm\Tags;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTagRequest extends FormRequest
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
