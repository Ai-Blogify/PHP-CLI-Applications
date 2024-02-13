<?php


echo "Welcome to Guess The Number Game!\n\n";

$option = getopt('', ['min::', 'max::']);

if (isset($option['min']) && isset($option['max'])) {
    $min = $option['min'];
    $max = $option['max'];
} else {
    $min = 1;
    $max = 10;
}

$number = rand($min, $max);

// There are two version of the game here:
// 1. The user guesses the number in 1 try
// 2. The user guesses the number in multiple tries

$game = (int)readline("At first, Enter 1 for 1 try or 2 for multiple tries: ");

echo "Guess a number between {$min} and {$max}: \n";

echo "\n";

switch ($game) {
    case 1:
        $guess = (int)readline("Now, What's your guess? : ");
        guessOneTry($number, $guess);
        break;
    case 2:
        $guess = (int)readline("Now, What's your guess? : ");
        guessMultipleTries($number, $guess);
        break;
    default:
        echo "Invalid input. Please enter 1 or 2.\n";
}
function guessOneTry($number, $guess)
{
    if ($guess === $number) {
        echo "Congratulations, you guessed the number!\n";
    } else {
        echo "Sorry, that's not the number. The number was {$number}.\n";
    }
}

function guessMultipleTries($number, $guess)
{
    $tries = 0;
    while (true) {
        if ($guess < $number) {
            echo "Too low. Try again: \n";
        }
        else if ($guess > $number) {
            echo "Too high. Try again: \n";
        } else {
            echo "Congratulations, you guessed the number!\n";
            break;
        }
        $tries++;
        $guess = (int)readline("What's your guess? : ");
    }
    $tries++;
    echo "It took {$tries} tries to guess the number.\n";
}