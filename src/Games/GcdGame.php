<?php

namespace Php\Project\Games\GcdGame;

use function Php\Project\Engine\runGame;

function findGcd(int $firstNum, int $secondNum): int
{
    if ($secondNum === 0) {
        return $firstNum;
    } else {
        return findGcd($secondNum, $firstNum % $secondNum);
    }
}

function gcdGame(): void
{
    $expressions = [];
    $desciption = "Find the greatest common divisor of given numbers.";

    for ($i = 0; $i < 3; $i++) {
        $firstNum = rand(0, 100);
        $secondNum = rand(0, 100);
        $gcd = findGcd($firstNum, $secondNum);

        $expressions[] = [
            'expression' => "{$firstNum} {$secondNum}",
            'correctAnswer' => $gcd
        ];
    }


    runGame($expressions, $desciption);
}
