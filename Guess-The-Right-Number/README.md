# Guess The Number Game

This is a PHP command-line game called "Guess The Number". It allows the user to guess a randomly generated number within a specified range. The game offers two modes: one try and multiple tries. The user can choose the mode and attempt to guess the number accordingly.

## How to Run

1. Make sure you have PHP installed on your system.
2. Clone this repository.
3. Open a terminal or command prompt and navigate to the project directory.
4. Run the game using the following command:

   ```shell
   php guess_the_number.php
   
## Options

The script accepts the following options:

- `--min`: Specifies the minimum value for the range of the generated number. If this option is not provided, the default minimum value is 1.
- `--max`: Specifies the maximum value for the range of the generated number. If this option is not provided, the default maximum value is 10.

You can use these options to customize the range of the number to be guessed in the game. For example, to set the minimum value to 5 and the maximum value to 20, you can run the script with the following command:

   ```shell
   php guess_the_number.php --min=5 --max=20
