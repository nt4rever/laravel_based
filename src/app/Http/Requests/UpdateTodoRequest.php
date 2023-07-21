<?php

namespace App\Http\Requests;
use App\Models\Todo;


class UpdateTodoRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() : bool
    {
        $todo = Todo::find($this->route('id'));
        return $todo->created_by == $this->user()->id;;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'content' => 'required|max:1000'
        ];
    }
}
