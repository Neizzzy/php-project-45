<?php

namespace Php\Project\EvenGame;

use function cli\line;
use function cli\prompt;
use function Php\Project\Welcome\welcome;

function evenGame(): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?', false, ' ');
    line("Hello, {$name}!");
    line("Answer \"yes\" if the number is even, otherwise answer \"no\".");

    $gameCount = 3;
    $isGameCorrect = true;

    for ($i = 0; $i < $gameCount; $i++) {
        $num = rand(0, 100);
        line("Question: {$num}");
        $userAnswer = prompt("Your answer:", false, ' ');

        $correctAnswer = '';
        $num % 2 === 0 ?  $correctAnswer = 'yes' : $correctAnswer = 'no';

        if ($userAnswer === $correctAnswer) {
            line("Correct!");
        } else {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");
            $isGameCorrect = false;
            break;
        }
    }

    if ($isGameCorrect) {
        line("Congratulations, {$name}!");
    }
}
