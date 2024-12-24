<?php

namespace PROJECT\Validation;

class Massage
{
  public static function generator($rule, $field): array|string
  {
    return ucwords(str_replace("_", ' ', str_replace("%s", $field, $rule)));
  }
}
