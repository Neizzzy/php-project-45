<?php

namespace Php\Project\EvenGame;

use function cli\line;
use function cli\prompt;
use function Php\Project\Engine\runGame;

function evenGame(): void
{
    $expressions = [];
    $rightAnswer = '';

    for ($i = 0; $i < 3; $i++) {
        $num = rand(0, 20);

        $num % 2 === 0 ? $rightAnswer = 'yes' :  $rightAnswer = 'no';

        $expressions[] = [
            'expression' => $num,
            'correctAnswer' => $rightAnswer
        ];
    }

    runGame($expressions);
}
