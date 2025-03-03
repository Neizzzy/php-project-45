<?php

namespace Pph\Project\Games\PrimeGame;

use function Php\Project\Engine\runGame;

function isPrimeNumber(int $number): bool
{
    if ($number === 1) {
        return false;
    }

    $prime = true;
    $i = 2;

    while ($i <= sqrt($number) && $prime === true) {
        if ($number % $i === 0) {
            $prime = false;
        }

        $i++;
    }

    return $prime;
}

function primeGame(): void
{
    $expressions = [];
    $description = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";

    for ($i = 0; $i < 3; $i++) {
        $num = rand(1, 100);
        $result = isPrimeNumber($num);

        $correctAnswer = $result === true ? 'yes' : 'no';
        $expressions[] = [
            'expression' => $num,
            'correctAnswer' => $correctAnswer
        ];
    }

    runGame($expressions, $description);
}
