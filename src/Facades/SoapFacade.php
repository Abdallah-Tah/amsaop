<?php

namespace Amohame\Amsoap\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class SoapFacade
 * @package Amohame\Amsoap\Facades
 */
class SoapFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Amsoap';
    }
}