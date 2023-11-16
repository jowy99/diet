<?php
declare(strict_types=1);

namespace App\Http\Requests\Crm\Dishes;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDishesRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required',
            'time' => 'required',
            'IngTag' => 'required',
            'IngTag.*' => ['boolean'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
