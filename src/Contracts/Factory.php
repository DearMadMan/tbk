<?php
namespace Dearmadman\Tbk\Contracts;

interface Factory
{
    /**
     * Get a matched prodiver implementation.
     *
     * @param  string  $driver
     * @return \Larastarscn\AliDaYu\AbstractProvider
     */
    public function driver($driver);
}
