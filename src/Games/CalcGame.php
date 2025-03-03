<?php

namespace Php\Project\Games\CalcGame;

use function Php\Project\Engine\runGame;

function calcGame(): void
{
    $expressions = [];
    $description = "What is the result of the expression?";
    $operations = ['+', '-', '*'];

    for ($i = 0; $i < 3; $i++) {
        $firstNum = rand(0, 30);
        $secondNum = rand(0, 20);

        $operationIndex = array_rand($operations, 1);

        $correctAnswer = null;
        switch ($operations[$operationIndex]) {
            case '+':
                $correctAnswer = $firstNum + $secondNum;
                break;
            case '-':
                $correctAnswer = $firstNum - $secondNum;
                break;
            case '*':
                $correctAnswer = $firstNum * $secondNum;
                break;
        }

        $expressions[] = [
            'expression' => "{$firstNum} {$operations[$operationIndex]} {$secondNum}",
            'correctAnswer' => $correctAnswer
        ];
    }

    runGame($expressions, $description);
}
