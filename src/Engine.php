<?php

namespace Php\Project\Engine;

use function cli\line;
use function cli\prompt;

function compareAnswers(string $userAnswer, string $correctAnswer): bool
{
    if ($userAnswer === $correctAnswer) {
        line("Correct!");
        return true;
    } else {
        line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
        return false;
    }
}

function gameResult(bool $isCorrect, string $name): void
{
    if ($isCorrect) {
        line("Congratulations, {$name}!");
    } else {
        line("Let's try again, {$name}!");
    }
}

function runGame(array $expressions): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?', false, ' ');
    line("Hello, {$name}!");

    $result = true;

    foreach ($expressions as $expression) {
        line("Question: {$expression['expression']}");

        $userAnswer = prompt("Your answer:", false, ' ');

        $result = compareAnswers($userAnswer, $expression['correctAnswer']);

        if ($result === false) {
            break;
        }
    }
    gameResult($result, $name);
}
