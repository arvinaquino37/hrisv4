<?php

namespace App\Http\Requests\Role;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RoleRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        switch ($this->method()) {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST' || 'PATCH':
            {
                return [
                    'name' => 'required|max:255',
                    'status_id' => 'required',
                    'upper_roles' => 'required|array',
                ];
            }
            default:
                break;
        }
    }
    public function messages()
    {
        return [
            'name.required' => _trans('validation.Name is required'),
            'name.max'      => _trans('validation.Name is not more than 255 characters'),
            'status_id.required' => _trans('validation.Status is required'),
            'upper_roles.required' => _trans('validation.Upper Roles is required'),
        ];
    }
}
