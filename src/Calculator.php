<?php

declare(strict_types=1);

namespace App;

final class Calculator
{
    public function add(int $a, int $b): int
    {
        return $a+$b;
    }

    public function multiply(int $a, int $b): int
    {
        // Небольшая логика, чтобы были ветки
        if ($a === 0 || $b === 0) {
            return 0;
        }

        return $a * $b;
    }
}
