<?php

namespace Php\Project\Games\EvenGame;

use function Php\Project\Engine\runGame;

use const Php\Project\Engine\QUESTIONS_COUNT;

const GAME_DESCRIPTION = "Answer \"yes\" if the number is even, otherwise answer \"no\".";

function evenGame(): void
{
    $expressions = [];

    for ($i = 0; $i < QUESTIONS_COUNT; $i++) {
        $num = rand(0, 100);

        $rightAnswer = $num % 2 === 0 ? 'yes' : 'no';

        $expressions[] = [
            'expression' => $num,
            'correctAnswer' => $rightAnswer
        ];
    }

    runGame($expressions, GAME_DESCRIPTION);
}
