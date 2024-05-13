<?php

namespace Heybot\LaravelActions\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Heybot\LaravelActions\LaravelActions
 */
class Actions extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Heybot\LaravelActions\LaravelActions::class;
    }
}
