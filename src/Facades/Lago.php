<?php

namespace IBroStudio\Lago\Facades;

use IBroStudio\Lago\Sdk\LagoSdk;
use Illuminate\Support\Facades\Facade;

/**
 * @see \IBroStudio\Lago\Lago
 */
class Lago extends Facade
{
    protected static function getFacadeAccessor()
    {
        return LagoSdk::class;
    }
}
