<?php

declare(strict_types=1);

use Putheakhem\KhmerNumberToText\KhmerNumberConverter;

if (! function_exists('khmer_number_to_text')) {
    function khmer_number_to_text(string|int $value): string
    {
        return (new KhmerNumberConverter())->toText($value);
    }
}
