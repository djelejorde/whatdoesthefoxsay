<?php

namespace Denver\NumberTask\Services;

class OutputterService
{
    public function concatWithSeparator(array $array, string $separator) : string
    {
        return implode($separator, $array);
    }
}
