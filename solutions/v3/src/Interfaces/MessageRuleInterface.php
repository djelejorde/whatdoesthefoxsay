<?php

declare(strict_types=1);

namespace Denver\NumberTask\Interfaces;

interface MessageRuleInterface
{
    public function addToMessageRules(string $functionName, string $message);

    public function validateRules(int $number);
}
