<?php

namespace Pph\Project\Games\PrimeGame;

use function Php\Project\Engine\runGame;

use const Php\Project\Engine\QUESTIONS_COUNT;

const GAME_DESCRIPTION = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";

function isPrimeNumber(int $number): bool
{
    if ($number === 1) {
        return false;
    }

    $isPrime = true;
    $i = 2;

    while ($i <= sqrt($number) && $isPrime === true) {
        if ($number % $i === 0) {
            $isPrime = false;
        }

        $i++;
    }

    return $isPrime;
}

function primeGame(): void
{
    $expressions = [];

    for ($i = 0; $i < QUESTIONS_COUNT; $i++) {
        $num = rand(1, 100);
        $result = isPrimeNumber($num);

        $correctAnswer = $result === true ? 'yes' : 'no';
        $expressions[] = [
            'expression' => $num,
            'correctAnswer' => $correctAnswer
        ];
    }

    runGame($expressions, GAME_DESCRIPTION);
}
