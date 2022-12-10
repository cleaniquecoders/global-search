<?php

namespace CleaniqueCoders\GlobalSearch\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CleaniqueCoders\GlobalSearch\GlobalSearch
 */
class GlobalSearch extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \CleaniqueCoders\GlobalSearch\GlobalSearch::class;
    }
}
