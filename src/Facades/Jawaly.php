<?php

namespace Aghanem\Jawaly\Facades;

use Illuminate\Support\Facades\Facade;

class Aghanem extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'jawaly';
    }

}
