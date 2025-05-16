<?php

declare(strict_types=1);

namespace Putheakhem\KhmerNumberToText\Facades;

use Illuminate\Support\Facades\Facade;

final class KhmerNumber extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'khmer-number-to-text';
    }
}
