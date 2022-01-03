<?php

namespace Niloofarfs\Oreo\Facades;

use Illuminate\Support\Facades\Facade;

class Oreo extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'oreo';
    }
}
