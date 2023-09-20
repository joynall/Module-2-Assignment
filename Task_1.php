<?php
// for for loop
function print_even_numbers(int $start, int $end, int $step): void
{
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 === 0) {
            echo $i . PHP_EOL;
        }
    }
}

print_even_numbers(1, 20, 2);

// for while loop
function print_even_numbers_while(int $start, int $end, int $step): void
{
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 === 0) {
            echo $i . PHP_EOL;
        }
        $i += $step;
    }
}

print_even_numbers_while(1, 20, 2);

//for do while loop






 
