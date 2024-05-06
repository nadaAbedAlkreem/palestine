<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class MatchCurrentPassword implements Rule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */

    public function passes($attribute, $value)
    {
        // Retrieve the currently authenticated user
        $user = auth()->user();
         return Hash::check($value, $user->password);
        

        // Check if the provided password matches the user's current password
    }

    public function message()
    {
        return 'The :attribute does not match your current password.';
    }
}
