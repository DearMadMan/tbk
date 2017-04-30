<?php
namespace Dearmadman\Tbk\Facades;

use Dearmadman\Tbk\Contracts\Factory;
use Illuminate\Support\Facades\Facade;

class Tbk extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Factory::class;
    }
}
