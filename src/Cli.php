<?php

namespace Php\Project\Cli;

use function cli\line;
use function cli\prompt;

function welcome(): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?', false, ' ');
    line("Hello, {$name}!");
}
