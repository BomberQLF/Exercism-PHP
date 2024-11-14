Copy solution
<?php
declare(strict_types=1);
function reverseString(string $text): string
{
    // Pas obliger de trim
    return trim(strrev($text));
}