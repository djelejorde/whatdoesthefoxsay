<?php

function isDivisible(int $number, int $divisor) : bool
{
    return $number % $divisor === 0;
}

$max = 20;
$min = 1;
$ctr = 1;
$finalOutput = [];

while ($ctr >= $min && $ctr <= $max) {
    $number = $ctr;

    $message = '';

    $isDivisibleByThree = isDivisible($number, 3);
    $isDivisibleByFive = isDivisible($number, 5);

    if ($isDivisibleByThree && $isDivisibleByFive) {
        $message = 'papow';
    } else if ($isDivisibleByThree) {
        $message = 'pa';
    } else if ($isDivisibleByFive) {
        $message = 'pow';
    } else {
        $message = $number;
    }

    $finalOutput[] = $message;

    $ctr++;
}

echo implode(' ', $finalOutput);
