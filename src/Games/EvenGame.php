<?php

namespace Php\Project\Games\EvenGame;

use function Php\Project\Engine\runGame;

function evenGame(): void
{
    $expressions = [];
    $description = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
    $rightAnswer = '';

    for ($i = 0; $i < 3; $i++) {
        $num = rand(0, 100);

        $num % 2 === 0 ? $rightAnswer = 'yes' :  $rightAnswer = 'no';

        $expressions[] = [
            'expression' => $num,
            'correctAnswer' => $rightAnswer
        ];
    }

    runGame($expressions, $description);
}
