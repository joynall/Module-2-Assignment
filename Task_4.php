<?php

function print_even_numbers(int $start, int $end, int $step): void
{
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 === 0) {
            echo $i . PHP_EOL;
        }
    }
}

print_even_numbers(1, 20, 2);
