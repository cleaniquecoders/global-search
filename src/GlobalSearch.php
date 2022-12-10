<?php

namespace CleaniqueCoders\GlobalSearch;

use Illuminate\Support\Facades\Route;

class GlobalSearch
{
    public static function routes()
    {
        Route::middleware(config('global-search.middleware'))
            ->get(
                config('global-search.uri'),
                config('global-search.controller')
            )
            ->name(config('global-search.route_name'));
    }
}
