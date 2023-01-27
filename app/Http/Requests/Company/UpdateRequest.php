<?php

namespace App\Http\Requests\Company;

use App\Models\Company;
use App\Rules\EmailRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
        return [
            'name' => ['required', 'string', 'max:100', Rule::unique(Company::class)->ignore($this->company->id)],
            'email' => ['email', 'nullable' ,'max:120',
             Rule::unique(Company::class)->ignore($this->company->id),
             new EmailRule()
            ],
            'logo' => ['max:5000', 'mimes:png,jpg,jpeg'],
            'website' => ['string', 'url','max:120', 'nullable']
        ];
    }
}
