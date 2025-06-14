<?php

namespace App\Http\Requests\panel\user;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
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
        $user = $this->route('user');
        return [
            'name' =>['required' , 'string ',' max:50'],
            'mobile' =>[ 'required' , 'string',' max:50',Rule::unique('users')->ignore($user->id)],
            'email' => [ 'required' , 'string','email',' max:50',Rule::unique('users')->ignore($user->id)],
            'role' => ['required' , 'max:50'],
        ];
    }
}
