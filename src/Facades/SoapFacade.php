<?php

namespace Amohame\Amsoap\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class ShoppingCartFacade
 * @package LaraShout\ShoppingCart
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