<?php

declare(strict_types=1);

namespace Putheakhem\KhmerNumberToText;

use Illuminate\Support\ServiceProvider;

final class KhmerNumberToTextServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton('khmer-number-to-text', function ($app) {
            return new KhmerNumberConverter();
        });
    }

    public function boot(): void
    {
        // You could publish config, translations, etc. here if needed in future
    }
}
