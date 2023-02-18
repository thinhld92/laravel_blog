<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'name' => 'required|max:255',
            'username' => 'required|min:6|alpha_num|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'group_id' => 'required|integer|gt:0',
        ];
        $id = $this->user->id ?? null;
        $method = $this->method();
        if ($id && $method == 'PUT') {
            $rules['username'] = 'required|min:6|alpha_num|unique:users,username,'.$id;
            $rules['email'] = 'required|email|unique:users,email,'.$id;
            if($this->password){
                $rules['password'] = 'min:6';
            }else{
                unset($rules['password']);
            }
        }
        return $rules;
    }

    // public function messages()
    // {
    //     return [

    //     ];
    // }

    public function attributes()
    {
        return [
            'group_id' => __('custom.attributes.group_id')
        ];  
    }
}
