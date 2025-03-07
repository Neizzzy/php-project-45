<?php

namespace Php\Project\Engine;

use function cli\line;
use function cli\prompt;

const QUESTIONS_COUNT = 3;

function runGame(array $expressions, string $gameDescription): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?', false, ' ');
    line("Hello, {$name}!");
    line($gameDescription);

    $isSuccess = true;

    foreach ($expressions as $expression) {
        line("Question: {$expression['expression']}");

        $userAnswer = prompt("Your answer:", false, ' ');

        if ($userAnswer === strval($expression['correctAnswer'])) {
            line("Correct!");
        } else {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$expression['correctAnswer']}'.");
            $isSuccess = false;
            break;
        }
    }

    if ($isSuccess === true) {
        line("Congratulations, {$name}!");
    } else {
        line("Let's try again, {$name}!");
    }
}
