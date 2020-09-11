<?php

namespace Aminetiyal\LaravelAdminlte;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Aminetiyal\LaravelAdminlte\Skeleton\SkeletonClass
 */
class LaravelAdminlteFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-adminlte';
    }
}
