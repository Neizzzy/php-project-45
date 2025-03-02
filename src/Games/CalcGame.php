<?php

namespace Php\Project\Games\CalcGame;

use function Php\Project\Engine\compareAnswers;
use function Php\Project\Engine\gameResult;
use function Php\Project\Engine\getAnswer;
use function Php\Project\Engine\getName;
use function Php\Project\Engine\greetings;
use function Php\Project\Engine\runGame;
use function Php\Project\Engine\showGame;
use function Php\Project\Engine\showQuestion;
use function Php\Project\Engine\welcome;

function calcGame(): void
{
    $expressions = [];
    $operations = ['+', '-', '*'];

    for ($i = 0; $i < 3; $i++) {
        $firstNum = rand(0, 20);
        $secondNum = rand(0, 10);

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

    runGame($expressions);
}
