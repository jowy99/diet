<?php
declare(strict_types=1);

namespace App\Http\Requests\Crm\Dishes;

use Illuminate\Foundation\Http\FormRequest;

class StoreDishesRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required',
            'description' => 'nullable',
            'ingredients' => 'required',
            'steps'=> 'required',
            'notes' => 'nullable',
        ];
    }
    public function authorize(): bool
    {
        return true;
    }
}
