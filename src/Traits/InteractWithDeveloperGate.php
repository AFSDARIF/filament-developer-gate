<?php

namespace Afsdarif\FilamentDeveloperGate\Traits;

use Filament\Panel;
use Afsdarif\FilamentDeveloperGate\Http\Middleware\DeveloperGateMiddleware;

trait InteractWithDeveloperGate
{
    public static function getRouteMiddleware(Panel $panel): string | array
    {
        return [
            'auth',
            'verified',
            DeveloperGateMiddleware::class
        ];
    }
}
