<?php
declare(strict_types=1);

namespace App\Http\Requests\Crm\IngredientsTags;

use Illuminate\Foundation\Http\FormRequest;

class UpdateIngredientsTagsRequest extends FormRequest
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
