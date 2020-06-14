<?php

function isDivisible(int $number, int $divisor) : bool
{
    return $number % $divisor === 0;
}

function getDivisibilityMessage(int $number, array $divisors, array $rules) : string
{
    $message = '';

    foreach($divisors as $divisor) {
        $isDivisible = isDivisible($number, $divisor);

        $message .= $isDivisible && isset($rules[$divisor]) ? $rules[$divisor] : '';
    }

    return $message ?: $number;
}

function manageNumberList(int $min, int $max, array $divisors, $rules)
{
    $result = [];
    $ctr = 1;

    while ($ctr >= $min && $ctr <= $max) {
        $number = $ctr;
    
        $message = getDivisibilityMessage($number, $divisors, $rules);
    
        $result[] = $message;
    
        $ctr++;
    }

    return $result;
}

function outputResultIntoConcatenatedFormat(array $result, string $seperator)
{
    echo implode($seperator, $result);
}

$rules = [
    '2' => 'hatee',
    '3' => 'pa',
    '5' => 'pow',
    '7' => 'ho'
];

$t1Result = manageNumberList(1, 20, [3, 5], $rules);
outputResultIntoConcatenatedFormat($t1Result, ' ');
echo "\n";

$t2Result = manageNumberList(1, 15, [2, 7], $rules);
outputResultIntoConcatenatedFormat($t2Result, '-');
echo "\n";