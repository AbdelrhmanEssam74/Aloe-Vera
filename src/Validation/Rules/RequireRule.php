<?php

namespace PROJECT\Validation\Rules;

use PROJECT\Validation\Rules\Contract\Rules;

class RequireRule implements Rules
{
  public function apply($field, $value, $data): bool
  {
    return !empty($value);
  }
  public function __toString()
  {
    $message = app()->languages->get(getLanguage())['validation']['required'];
    if (getLanguage() === 'ar')
      return "{$message}";
    else
      return "%s {$message}";
  }
}
