<?php

namespace PROJECT\Validation\Rules;

use PROJECT\Validation\Rules\Contract\Rules;

class PhoneNumberRule implements Rules
{

    public function apply($field, $value, $data): false|int
    {
        return preg_match("/^(010|012|015|011)\d{8}$/", $value);
    }

    public function __toString()
    {
        return "%s Is Invalid   ";
    }
}