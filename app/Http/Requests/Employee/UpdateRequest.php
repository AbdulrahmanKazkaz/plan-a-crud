<?php

namespace App\Http\Requests\Employee;

use App\Models\Company;
use App\Models\Employee;
use App\Rules\EmailRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:100'],
            'email' => [
                'email', 'nullable' ,'max:120',
                 Rule::unique(Employee::class)->ignore($this->employee->id), new EmailRule()
            ],
            'phone' => ['nullable','numeric','regex:/^([0-9\s\-\+\(\)]*)$/','min:9',Rule::unique(Employee::class)->ignore($this->employee->id)],
            'company_id' => ['required', 'numeric', Rule::exists(Company::class, 'id')]
        ];
    }
}
