<?php

namespace Php\Project\Games\GcdGame;

use function Php\Project\Engine\runGame;

use const Php\Project\Engine\QUESTIONS_COUNT;

const GAME_DESCRIPTION = "Find the greatest common divisor of given numbers.";

function findGcd(int $firstNum, int $secondNum): int
{
    if ($secondNum === 0) {
        return $firstNum;
    }

    return findGcd($secondNum, $firstNum % $secondNum);
}

function gcdGame(): void
{
    $expressions = [];

    for ($i = 0; $i < QUESTIONS_COUNT; $i++) {
        $firstNum = rand(0, 100);
        $secondNum = rand(0, 100);
        $gcd = findGcd($firstNum, $secondNum);

        $expressions[] = [
            'expression' => "{$firstNum} {$secondNum}",
            'correctAnswer' => $gcd
        ];
    }

    runGame($expressions, GAME_DESCRIPTION);
}
