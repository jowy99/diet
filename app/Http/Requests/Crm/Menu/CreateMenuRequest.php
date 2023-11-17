<?php
declare(strict_types=1);

namespace App\Http\Requests\Crm\Menu;

use Illuminate\Foundation\Http\FormRequest;

class CreateMenuRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'meals' => [
                'int',
                'required',
            ],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
