<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
        $id = $this->post->id ?? null;
        return [
            'title' => 'required|unique:posts,title,'.$id,
            'description' => 'required',
            'image' => 'required',
            'image_caption' => 'required',
            'category_id' => 'required',
            'status' => 'required',
            'hot_date' => 'required',
            'new_date' => 'required',
            'published_at' => 'required',
            'content' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'category_id' => __('custom.attributes.categories.category_id'),
        ];
    }
}
