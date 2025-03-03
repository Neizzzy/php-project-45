<?php

namespace Php\Project\Games\ProgressionGame;

use function Php\Project\Engine\runGame;

function generateProgression(int $progressionStart, int $progressionStep, int $progressionLength = 10): array
{
    $progression[] = $progressionStart;

    for ($i = 1; $i < $progressionLength; $i++) {
        $progression[] = $progression[$i - 1] + $progressionStep;
    }

    return $progression;
}


function progressionGame(): void
{
    $expressions = [];
    $description = "What number is missing in the progression?";

    for ($i = 0; $i < 3; $i++) {
        $progressionStart = rand(1, 15);
        $progressionStep = rand(1, 5);
        $progressionLength = rand(5, 15);

        $progression = generateProgression($progressionStart, $progressionStep, $progressionLength);

        $progressionRandomIndex = array_rand($progression, 1);
        $correctAnswer = $progression[$progressionRandomIndex];

        $progression[$progressionRandomIndex] = '..';
        $expression = implode(' ', $progression);

        $expressions[] = [
            'expression' => $expression,
            'correctAnswer' => $correctAnswer
        ];
    }

    runGame($expressions, $description);
}
