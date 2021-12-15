<?php

namespace Devsbuddy\Laraworld;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Devsbuddy\Laraworld\Skeleton\SkeletonClass
 */
class LaraworldFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laraworld';
    }
}
