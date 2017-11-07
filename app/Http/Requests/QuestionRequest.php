<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'question_id' => 'required|integer|exists:questions,id',
            'post'        => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'question_id.required' => 'Ай-ай-ай не делайте бяку',
            'question_id.integer'  => 'А вот нет такого вопроса',
            'question_id.exists'   => 'А вот нет такого вопроса',
            'post.required'        => 'Ответ не может быть пустым',
        ];
    }
}
