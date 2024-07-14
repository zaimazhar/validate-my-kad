<?php

namespace xaim\ValidateMyKad\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \xaim\ValidateMyKad\ValidateMyKad
 */
class ValidateMyKad extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \xaim\ValidateMyKad\ValidateMyKad::class;
    }
}
