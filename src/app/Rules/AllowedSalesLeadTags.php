<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class AllowedSalesLeadTags implements Rule
{
    private const ALLOWED_SALES_LEAD_TAGS = [
        'Phone',
        'Email',
        'Warm',
        'Cold',
        'New',
        'Existing',
    ];

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value):bool
    {
        return in_array($value, self::ALLOWED_SALES_LEAD_TAGS);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The supplied sales lead tag is invalid.';
    }
}
