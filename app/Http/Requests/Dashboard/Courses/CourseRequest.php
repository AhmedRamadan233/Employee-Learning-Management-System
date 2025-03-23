<?php

namespace App\Http\Requests\Dashboard\Courses;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $courseId = $this->route('id');
        $userId = User::where('email', $this->user_email)->value('id');
        return [
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($userId),
            ],
            'password' => 'required|min:6',

            'title' => [
                'required',
                'string',
                'max:255',
                Rule::unique('courses', 'title')->ignore($courseId),
            ],
            'description' => 'nullable|string',

        ];
    }
}
