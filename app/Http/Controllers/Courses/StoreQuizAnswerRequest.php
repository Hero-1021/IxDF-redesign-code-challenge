<?php

declare(strict_types=1);

namespace App\Http\Controllers\Courses;

use Illuminate\Foundation\Http\FormRequest;

final class StoreQuizAnswerRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'answer' => ['required', 'string', 'min:3'],
        ];
    }
}
