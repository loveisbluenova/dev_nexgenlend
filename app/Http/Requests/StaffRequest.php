<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
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
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                return [
                    'first_name' => 'required|min:3',
                    'last_name' => 'required|min:3',
                    'job' => 'required',
                    'NMLS' => 'required',
                    'email' => 'required|email|unique:staffs,email',
                    'phone' => 'required|unique:staffs,phone',
                    'pic_file' => 'mimes:jpg,jpeg,bmp,png,gif|max:10000'
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'firstname' => 'required|min:3',
                    'last_name' => 'required|min:3',
                    'job' => 'required',
                    'NMLS' => 'required',
                    'email' => 'required|unique:staffs,email,' . $this->staff->id,
                    'phone' => 'required|unique:staffs,phone' . $this->staff->id,
                    'pic_file' => 'image|mimes:jpg,jpeg,bmp,png|max:10000'
                ];
            }
            default:
                break;
        }

        return [

        ];
    }


}

