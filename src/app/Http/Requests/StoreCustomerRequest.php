<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
            'name' => ['required', 'min:5', 'max:255'],
            'contact_number' => ['sometimes', 'numeric'],
            'address_type' => 'in:Billing,Delivery,PostalAddress', //  биллинг, доставка и почтовый адресс
            'address' => ['required', 'min:5', 'max:255'],
            'city' => ['required', 'min:5', 'max:255'],
            'postal_code' => ['required', 'min:5', 'max:255'],
        ];
    }
}
